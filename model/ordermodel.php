<?php

    function select_donhang() {
        $sql = "SELECT 
                    u.id as user_id,
                    o.id as orderid,
                    CONCAT(u.name) AS fullName,
                    o.ma_donhang,
                    o.name,
                    o.phone,
                    o.addr,
                    o.status,
                    o.created_at,
                    SUM(od.price * od.quantity) AS total
                FROM 
                    `orders` o
                JOIN 
                    users u ON u.id = o.user_id
                JOIN 
                    order_detail od ON od.order_id = o.id
                GROUP BY 
                    o.id";
        return pdo_query($sql);
    }

    function listOrder_detail($order_id){
        $sql="SELECT 
                od.id,
                od.product_id,
                p.id_product,
                p.name,
                p.images,
                od.price,
                od.quantity,
                od.price * od.quantity AS total
            FROM 
                order_detail od
            JOIN 
                products p ON p.id_product = od.product_id
            WHERE 
                od.order_id = ".$order_id;

        return pdo_query($sql);
    }
?>