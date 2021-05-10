<?php

namespace Application\App\Http;

class ParametersBag
{
    protected array $parameters = [];

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
    public function getParameter(string $key): ?Parameter
    {
        $paramFiltered = array_filter($this->parameters, function (parameter $param) use ($key) {
            return $param->getKey() === $key;
        });
        return count($paramFiltered) > 0 ? $paramFiltered[0] : null;
    }


}
