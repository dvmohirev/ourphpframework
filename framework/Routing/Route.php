<?php

namespace Framework\Routing;
class Route
{
    const METHOD_GET = 1;
    const METHOD_POST = 2;

    private $path;
    private $action;
    private $type;

    public function __construct($path, $action, $type)
    {
        $this->path = $path;
        $this->action = $action;
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    public function getParams(){
        $params = [];
        preg_match_all('/{([a-z]\w*)}/',$this->path,$params);
        var_dump($params[1]);
        return $params[1];
    }

    public function getMask(){
        $params = $this->getParams();
        $path = $this->path;
        foreach ($params as $param){
            $path = preg_replace("/{[a-z]\w*}/","(\w*)",$path);
        }
        return '~'.$path.'~';
    }
}