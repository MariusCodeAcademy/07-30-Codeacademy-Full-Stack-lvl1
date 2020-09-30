<?php

class HelperFunctions
{
    // statiniai metodai
    public static function checkGetVar($getVar, $conn)
    {
        // pasitikriname ar yra nustatytas id
        if (isset($_GET[$getVar]) && !empty($_GET[$getVar])) {
            // id yra gautas ir vygdom uzklausa
            // padaryti reiksme gauta is get atributo saugia naudoti su mysql
            $postID = mysqli_real_escape_string($conn->getConnection(), $_GET[$getVar]);
            $post = $conn->getPost($postID);
            //index    0        1
            return [$postID, $post];
        } else {
            die('id nenustatytas');
        }
    }
}
