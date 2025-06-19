<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Smartie Class
 *
 * @package        CodeIgniter
 * @subpackage     Libraries
 * @category       Smarty
 * @author         Kepler Gelotte
 * @link           http://www.coolphptools.com/codeigniter-smarty
 */
require_once( APPPATH.'/third_party/smarty/libs/Smarty.class.php' );

class Smartie extends Smarty {

    var $debug = false;

    function __construct()
    {
        parent::__construct();

        $this->template_dir = APPPATH . "views/templates";
        $this->compile_dir = APPPATH . "views/templates_c";
        if ( ! is_writable( $this->compile_dir ) )
        {
            // make sure the compile directory can be written to
            @chmod( $this->compile_dir, 0777 );
        } 

        // Uncomment these 2 lines to change Smarty's delimiters
        // $this->left_delimiter = '{{';
        // $this->right_delimiter = '}}';

        $this->assign( 'FCPATH', FCPATH );     // path to website
        $this->assign( 'APPPATH', APPPATH );   // path to application directory
        $this->assign( 'BASEPATH', BASEPATH ); // path to system directory

        log_message('debug', "Smarty Class Initialized");
    }

    function setDebug( $debug=true )
    {
        $this->debug = $debug;
    }

    /**
     *  Parse a template using the Smarty engine
     *
     * This is a convenience method that combines assign() and
     * display() into one step. 
     *
     * Values to assign are passed in an associative array of
     * name => value pairs.
     *
     * If the output is to be returned as a string to the caller
     * instead of being output, pass true as the third parameter.
     *
     * @access    public
     * @param    string
     * @param    array
     * @param    bool
     * @return    string
     */
    function view($template, $data = array(), $return = FALSE)
    {
        if ( ! $this->debug )
        {
            $this->error_reporting = false;
        }
        $this->error_unassigned = false;

        foreach ($data as $key => $val)
        {
            $this->assign($key, $val);
        }
        
        if ($return == FALSE)
        {
            $CI =& get_instance();
            if (method_exists( $CI->output, 'set_output' ))
            {
                $CI->output->set_output( $this->fetch($template) );
            }
            else
            {
                $CI->output->final_output = $this->fetch($template);
            }
            return;
        }
        else
        {
            return $this->fetch($template);
        }
    }
    function loadView($template, $data = array(), $header = 'Yes', $footer = 'Yes', $return = FALSE)
    {
        $CI =& get_instance();
        $data['base_url'] = base_url();
        if (! $this->debug)
        {
            $this->error_reporting = false;
        }
        $this->error_unassigned = false;
        $data['user_data'] = $CI->session->userdata();
        $data['config_data'] = $CI->config->config;
        // pr($data);
        foreach ($data as $key => $val)
        {
            $this->assign($key, $val);
        }
        
        // Initialize content
        $content = '';

        if(strtolower($header) == 'no' && strtolower($footer) == 'no'){
            $content.= $this->fetch($template,$data);
          }
        // Add header if required
        else{
            if (strtolower($header) == 'yes')
            {
                // $this->setHeaderFooterPath();
                $content .= $this->fetch('header.tpl',$data); // Adjust the header template name as needed
            }
        
            // Add main template
            // $this->smartyDefaultPath();
            $content .= $this->fetch($template);
        
            // Add footer if required
            if (strtolower($footer) == 'yes')
            {
                // $this->setHeaderFooterPath();
                $content .= $this->fetch('footer.tpl',$data); // Adjust the footer template name as needed
            }
        }
       

        if ($return == FALSE)
        {
            $CI =& get_instance();
            if (method_exists($CI->output, 'set_output'))
            {
                $CI->output->set_output($content);
            }
            else
            {
                $CI->output->final_output = $content;
            }
            return;
        }
        else
        {
            return $content;
        }
    }
}
// END Smartie Class
