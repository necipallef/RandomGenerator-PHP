<?php

namespace Necipallef\Random;

class RandomGenerator
{
    public function generateGUID()
    {
        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X',
            mt_rand(0, 65535),
            mt_rand(0, 65535),
            mt_rand(0, 65535),
            mt_rand(16384, 20479),
            mt_rand(32768, 49151),
            mt_rand(0, 65535),
            mt_rand(0, 65535),
            mt_rand(0, 65535));
    }

    public function generateUpperCaseWordWithNumbers($length)
    {
        $scope = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        return $this->generateStringFromScope($scope, $length);
    }

    public function generateLowerCaseWordWithNumbers($length)
    {
        $scope = 'abcdefghijklmnopqrstuvwxyz1234567890';
        return $this->generateStringFromScope($scope, $length);
    }

    public function generateUpperCaseWord($length)
    {
        $scope = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return $this->generateStringFromScope($scope, $length);
    }

    public function generateLowerCaseWord($length)
    {
        $scope = 'abcdefghijklmnopqrstuvwxyz';
        return $this->generateStringFromScope($scope, $length);
    }

    public function generateWord($length)
    {
        $scope = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        return $this->generateStringFromScope($scope, $length);
    }

    public function generateNumberOnlyString($length)
    {
        $scope = '1234567890';
        return $this->generateStringFromScope($scope, $length);
    }

    public function generateStringFromScope($scope, $length)
    {
        $output = '';
        for ($i = 0; $i < $length; $i++)
        {
            $output .= $scope[mt_rand(0, strlen($scope) - 1)];
        }
        return $output;
    }
}
