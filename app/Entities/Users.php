<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Users extends Entity
{
    
    public function insert_user()
    {
            {
                global $mysqli;
                $arrcheckpost = array('nim' => '', 'username' => '','email' => '', 'password' => '');
                $hitung = count(array_intersect_key($_POST, $arrcheckpost));
                if($hitung == count($arrcheckpost)){
                
                        $result = mysqli_query($mysqli, "INSERT INTO users SET
                        nim = '$_POST[nim]',
                        username = '$_POST[nim]',
                        password = '$_POST[password]',");
                        
                        if($result)
                        {
                            $response=array(
                                'status' => 1,
                                'message' =>'Akun Sukses Ditambahkan.'
                            );
                        }
                        else
                        {
                            $response=array(
                                'status' => 0,
                                'message' =>'Akun Gagal Ditambahkan'
                            );
                        }
                }else{
                    $response=array(
                                'status' => 0,
                                'message' =>'Parameter Do Not Match'
                            );
                }
                header('Content-Type: application/json');
                echo json_encode($response);
            }
        }
}
