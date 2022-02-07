<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Test\Admin;

use Lcobucci\JWT\Parser;
use Lcobucci\JWT\Builder;
use Lcobucci\JWT\ValidationData;
use Lcobucci\JWT\Signer\Hmac\Sha256;

class ControllerBase extends Controller
{
    /**
     * @param null $uid
     * @return string
     * 生成token
     */
    public static function createToken($uid = null)
    {
        $signer = new Sha256();//加密规则
        $time = time();//当前时间

        $token = (new Builder())
            ->issuedBy('teacher')//签发人
            ->canOnlyBeUsedBy('student')//接收人
            ->identifiedBy('MarsLei', true) //标题id
            ->issuedAt($time)//发出令牌的时间
            ->canOnlyBeUsedAfter($time) //生效时间(即时生效)
            ->expiresAt($time + 10) //过期时间
            ->with('uid', $uid) //用户id
            ->sign($signer, 'my') //签名
            ->getToken(); //得到token
        return (string)$token;
    }
    /**
     * @param null $token
     * @return int|mixed
     * 验证token
     */
    public static function verifyToken($token=null){
        //检测是否接收到了token
        if(empty($token)){
            return 0;
        }
        //转化为可以验证的token
        $token = (new Parser())->parse((string) $token);
        //验证基本设置
        $data = new ValidationData();
        $data->setIssuer('teacher');
        $data->setAudience('student');
        $data->setId('MarsLei');

        if(!$token->validate($data)){
            return 0;
        }
        //验证签名
        $signer = new Sha256();
        if(!$token->verify($signer, 'my')){
            return 0;
        }
        //验证通过，返回用户id
        return $token->getClaim('uid');
    }

}
