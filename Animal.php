<?php
/**
 *
 * Created by PhpStorm.
 * User: Du Thanh Hoang ( @hoangdt )
 * Date: 4/7/21
 * Time: 3:52 PM
 */

class Animal
{
/*    Mức độ truy cập - Access Modifier
        - public: công cộng - bất cứ đâu cũng có thể gọi đến // ko nên dùng
        - private: riêng tư - chỉ dùng trong class, ko thể gọi đến từ bên -> che giấu dữ liệu
*/
//
    private $name;

    public function __construct($name) // Magic Method - construct hàm khởi tạo
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function __destruct() //Hủy đối tượng - Giải phóng bộ nhớ
    {
//        echo 'Tôi đã bị hủy';
    }

    public function __toString()
    {
        return 'Thông tin của '.$this->name;
    }
}

$dog = new Animal('Pig');
//var_dump($dog->getName());
//unset($dog); // unset - isset

echo $dog;