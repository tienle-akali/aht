<?php

if (!function_exists('link_tag_html')) {
    function link_tag_html($data) {
        $result = '';
        if (count($data) > 0) {
            foreach ($data as $key) {
                $result .= link_tag($key);
            }
        }
        return $result;
    }
}
if (!function_exists('script_tag_html')) {
    function script_tag_html($data) {
        $result = '';
        if (isset($data) && count($data) > 0) {
            foreach ($data as $key => $value) {
                $result .= '<script ';
                if ($value['src']) {
                    $result .= " src='" . $value['src'] . "'";
                }
                if ($value['type']) {
                    $result .= " type='" . $value['type'] . "' >";
                }
                $result .= '</script>';
            }
        }
        return $result;
    }
}
if (!function_exists('script_tag_default_html')) {
    function script_tag_default_html($data, $type = 'javascript') {
        $result = '';
        if (isset($data) && count($data) > 0) {
            foreach ($data as $key => $value) {
                $result .= '<script ';
                if ($value) {
                    $result .= " src='" . base_url() . $value . "'";
                }
                $result .= " type='" . 'text/javascript' . "' >";

                $result .= '</script>';
            }
        }
        return $result;
    }
}
if (!function_exists('min_css')) {
    function min_css($files, $link = '') {
    	// $link = "public/assets/" . $link;
        $CI = & get_instance();  //get instance, access the CI superobject
        $CI->load->driver('minify');
        $result = '';
        if (isset($files) && count($files) > 0) {
            if ($CI->config->item('COMPRESS_OVERRIDE')) {
                if ($CI->config->item('COMPRESS_CSS')) {
                    $jss = $CI->minify->combine_files($files, "css", TRUE);
                    $CI->minify->save_file($jss, $link);
                    $result = '<link type="text/css" rel="stylesheet" href="' . base_url() . $link . '?v=' . uniqid() . '" async defer />';
                } else {
                    $result = link_tag_html($files);
                }
            } else {
                $result = '<link type="text/css" rel="stylesheet" href="' . base_url() . $link . '?v=' . uniqid() . '" async defer />';
            }
        }
        return $result;
    }
}
if (!function_exists('min_js')) {
    function min_js($files, $link = '') {
        // $link = "public/assets/" . $link;
        $CI = & get_instance();  //get instance, access the CI superobject
        $CI->load->driver('minify');
        $result = '';
        if (isset($files) && count($files) > 0) {
            if ($CI->config->item('COMPRESS_OVERRIDE')) {
                if ($CI->config->item('COMPRESS_JS')) {
                    $jss = $CI->minify->combine_files($files, "js", TRUE);

                    $CI->minify->save_file($jss, $link);
                    $result = '<script src="' . base_url() . $link . '?v=' . uniqid() . '" ></script>';
                } else {
                    $result = script_tag_default_html($files);
                }
            } else {
                $result = '<script src="' . base_url() . $link . '?v=' . uniqid() . '" ></script>';
            }
        }
        return $result;
    }
}
