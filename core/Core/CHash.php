<?php

class CHash
{

    public static function make($data)
    {
        // Hash Level 1
        $level_one = hash_init('sha512', HASH_HMAC, '594f1fb93097a');
        hash_update($level_one, $data);
        $level_one = hash_final($level_one);
        // Hash Level 2
        $level_two=hash_init('ripemd320', HASH_HMAC, '594f1fb93097a');
        hash_update($level_two, $level_one);
        $level_two = hash_final($level_two);
        // Hash Level 3
        $level_three=hash_init('sha3-512', HASH_HMAC, '594f1fb93097a');
        hash_update($level_three, $level_two);
        $level_three = hash_final($level_three);
        // Hash Level 4
        $level_four=hash_init('sha3-384', HASH_HMAC, '594f1fb93097a');
        hash_update($level_four, $level_three);
        $level_four = hash_final($level_four);
        // Hash Level 5
        $level_five=hash_init('sha384', HASH_HMAC, '594f1fb93097a');
        hash_update($level_five, $level_four);
        $level_five = hash_final($level_five);
        // Hash Level 6
        $level_final=hash_init('whirlpool', HASH_HMAC, '594f1fb93097a');
        hash_update($level_final, $level_five);
        $level_final = hash_final($level_final);
        // return hash
        return $level_final;
    }
}
