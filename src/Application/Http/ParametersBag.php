<?php

namespace Application\Application\Http;

class ParametersBag
{
    protected $parameters = [];

    public function getParameters(): array
    {
        return $this->parameters;
    }

    public function addParameter(Parameter $parameter)
    {
        $param = $this-> getParameter($parameter->getKey());
        if(!$param instanceof Parameter){
            $this-> parameters[] = $parameter;
        }
    }
    //retourne la valeur d'une clés
    public function getParameter(string $key): ?Parameter
    {
        $paramFiltered = array_filter($this->parameters, function (parameter $param) use ($key) {
            return $param->getKey() === $key;
        });
        return count($paramFiltered) > 0 ? $paramFiltered[0] : null;
    }


}

