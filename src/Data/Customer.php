<?php 

namespace minidatum\Data{

    class Customer{

        function __construct(private string $customer){

        }

        function generateId(string $id){
            echo "Halo $this->customer, ID Anda adalah $id\n";
        }
    }
}


?>