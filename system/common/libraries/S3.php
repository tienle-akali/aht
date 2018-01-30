<?php defined('BASEPATH') OR exit('No direct script access allowed');

require SHAREDPATH . 'third_party/aws/aws-autoloader.php';
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

class S3
{
	// ACL flags
	const ACL_PRIVATE = 'private';
	const ACL_PUBLIC_READ = 'public-read';
	const ACL_PUBLIC_READ_WRITE = 'public-read-write';
	const ACL_AUTHENTICATED_READ = 'authenticated-read';

	// Storage class flags
	const STORAGE_CLASS_STANDARD = 'STANDARD';
	const STORAGE_CLASS_RRS = 'REDUCED_REDUNDANCY';

	// Server-side encryption flags
	const SSE_NONE = '';
	const SSE_AES256 = 'AES256';
	
	// S3 client
	protected $s3;
	
	// CI instant
	protected $ci;
	
	/**
	 * Construction
	 */
	function __construct($config = array())
	{
		if (!empty($config))
		{
			$this->initialize($config);
		}
	}
	
	/**
	 * Initialize preferences
	 *
	 * @access	public
	 * @param	array
	 * @return	void
	 */
	public function initialize()
	{	
		// Load S3 config file : system/shared/config/s3.php
		$this->ci =& get_instance();
		$this->ci->config->load('s3');
		$access_key = $this->ci->config->item('access_key');
		$secret_key = $this->ci->config->item('secret_key');
		$region = $this->ci->config->item('region');
		$version = $this->ci->config->item('version');
		
		// Create S3 config
		$config = array(
			'credentials' => [
				'key' => $access_key, 
				'secret' => $secret_key
			],
			'region' => $region,
			'version' => $version
		);
		
		// Instantiate the client.
		$this->s3 = S3Client::factory($config);
	}
	
	/**
	 * Put an object
	 * @param string $bucket Bucket name
	 * @param string $file_path Local path file
	 * @param string $file_name Filename
	 * @param constant $acl ACL constant
	 * @return string Object url
	 */
	public function putObject($bucket, $file_path, $file_name, $acl = self::ACL_PUBLIC_READ)
	{
		try
		{
			// Upload data
			$file_content = file_get_contents($file_path);
			$result = $this->s3->putObject(array(
				'Bucket' => $bucket,
				'Key'    => $file_name,
				'Body'   => $file_content,
				'ACL'    => $acl
			));

			// return the URL to the object.
			return $result['ObjectURL'];
		}
		catch (S3Exception $e)
		{
			log_message('error', $e->getMessage());
			return '';
		}
	}
        
        /**
         * get files in folder
         * @param type $bucket
         * @param type $userId
         * @return string
         */
        public function get_files($bucket, $userId)
        {
            try
		{
			$objects = $this->s3->getIterator('ListObjects', array(
                            "Bucket" => $bucket,
                            "Prefix" => $userId. "/"
                        )); 
			// return the URL to the object.
			return $objects;
		}
		catch (S3Exception $e)
		{
			log_message('error', $e->getMessage());
			return '';
		}
        }
        
        /**
         * delete files
         * 
         * @param type $bucket
         * @param type $keyname
         * @return string
         */
        public function delete_file($bucket, $keyname){
            try{
                $objects = $this->s3->deleteObject(array(
                    'Bucket' => $bucket,
                    'Key'    => $keyname
                )); 
                // return the URL to the object.
		return $objects;
            } catch (Exception $ex) {
                log_message('error', $e->getMessage());
		return '';
            }
             
        }
}

?>