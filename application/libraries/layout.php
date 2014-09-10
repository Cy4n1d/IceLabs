<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout { 

    private $data = [];

    private $view = null;

    private $viewFolder = null;

    private $layoutFolder = 'layout';

    private $layout = 'default';

    private $controller;

    private $scriptFiles = [];

    private $cssFiles = [];

    private $scripts = [];

    private $css = [];

    public function __construct() {
        //Get Controller instance
        $this->controller =& get_instance();
    }

    public function render() {

        $controller = $this->controller->router->fetch_class();
        $method = $this->controller->router->fetch_method();
        $viewFolder = !($this->viewFolder) ? strtolower($controller) : $this->viewFolder;
        $view = !($this->view) ? $method : $this->view;

        $loadedData = array();
        $loadedData['view'] = $viewFolder.'/'.$view;
        $loadedData['data'] = $this->data;
        $loadedData['scriptFiles'] = $this->scriptFiles;
        $loadedData['cssFiles'] = $this->cssFiles;
        $loadedData['scripts'] = $this->scripts;
        $loadedData['css'] = $this->css;

        $layoutPath = '/'.$this->layoutFolder.'/'.$this->layout;
        $this->controller->load->view($layoutPath, $loadedData);
    }

    /**
     * Set the src of a script file to be inserted in the layout
     */
    public function addScriptFile($src) {
        $this->scriptFiles[$src] = $src;
    }

    /**
     * Set the src of a css file to be inserted in the layout
     */
    public function addCssFile($src) {
        $this->cssFiles[$src] = $src;
    }

    /**
     * Set some javascript to be inserted into the layout
     */
    public function addScript($script) {
        $this->scripts[md5($script)] = $script;
    }

    /**
     * Set some css to be inserted into the layout
     */
    public function addCss($css) {
        $this->css[md5($script)] = $script;
    }

    /**
     * Gets the value of data.
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }
    
    /**
     * Sets the value of data.
     *
     * @param mixed $data the data 
     *
     * @return self
     */
    public function setData(array $data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Gets the value of view.
     *
     * @return mixed
     */
    public function getView()
    {
        return $this->view;
    }
    
    /**
     * Sets the value of view.
     *
     * @param mixed $view the view 
     *
     * @return self
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * Gets the value of viewFolder.
     *
     * @return mixed
     */
    public function getViewFolder()
    {
        return $this->viewFolder;
    }
    
    /**
     * Sets the value of viewFolder.
     *
     * @param mixed $viewFolder the view folder 
     *
     * @return self
     */
    public function setViewFolder($viewFolder)
    {
        $this->viewFolder = $viewFolder;

        return $this;
    }

    /**
     * Gets the value of layoutFolder.
     *
     * @return mixed
     */
    public function getLayoutFolder()
    {
        return $this->layoutFolder;
    }
    
    /**
     * Sets the value of layoutFolder.
     *
     * @param mixed $layoutFolder the layout folder 
     *
     * @return self
     */
    public function setLayoutFolder($layoutFolder)
    {
        $this->layoutFolder = $layoutFolder;

        return $this;
    }

    /**
     * Gets the value of layout.
     *
     * @return mixed
     */
    public function getLayout()
    {
        return $this->layout;
    }
    
    /**
     * Sets the value of layout.
     *
     * @param mixed $layout the layout 
     *
     * @return self
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;

        return $this;
    }

    /**
     * Gets the value of controller.
     *
     * @return CI_Controller
     */
    public function getController()
    {
        return $this->controller;
    }
    
    /**
     * Sets the value of controller.
     *
     * @param CI_Controller $controller the controller 
     *
     * @return self
     */
    public function setController(CI_Controller $controller)
    {
        $this->controller = $controller;

        return $this;
    }

    /**
     * Gets the value of scriptFiles.
     *
     * @return array
     */
    public function getScriptFiles()
    {
        return $this->scriptFiles;
    }
    
    /**
     * Sets the value of scriptFiles.
     *
     * @param mixed $scriptFiles the script files 
     *
     * @return self
     */
    public function setScriptFiles(array $scriptFiles)
    {
        $this->scriptFiles = $scriptFiles;

        return $this;
    }

    /**
     * Gets the value of cssFiles.
     *
     * @return array
     */
    public function getCssFiles()
    {
        return $this->cssFiles;
    }
    
    /**
     * Sets the value of cssFiles.
     *
     * @param mixed $cssFiles the css files 
     *
     * @return self
     */
    public function setCssFiles(array $cssFiles)
    {
        $this->cssFiles = $cssFiles;

        return $this;
    }

    /**
     * Gets the value of scripts.
     *
     * @return array
     */
    public function getScripts()
    {
        return $this->scripts;
    }
    
    /**
     * Sets the value of scripts.
     *
     * @param mixed $scripts the scripts 
     *
     * @return self
     */
    public function setScripts(array $scripts)
    {
        $this->scripts = $scripts;

        return $this;
    }

    /**
     * Gets the value of css.
     *
     * @return array
     */
    public function getCss()
    {
        return $this->css;
    }
    
    /**
     * Sets the value of css.
     *
     * @param mixed $css the css 
     *
     * @return self
     */
    public function setCss(array $css)
    {
        $this->css = $css;

        return $this;
    }
} 

?>