<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/2/23
 * Time: 下午5:04
 */

namespace App\Http\Controllers\Util;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class githubController extends Controller{

    public function pullRepo(Request $request){
//        $secret = 'earBugHasBeenReborn';
//
//        $headers = getallheaders();
//        $hubSignature = $headers['X-Hub-Signature'];
//
//        // Split signature into algorithm and hash
//        list($algo, $hash) = explode('=', $hubSignature, 2);
//
//        // Get payload
//        $payload = file_get_contents('php://input');
//
//        // Calculate hash based on payload and the secret
//        $payloadHash = hash_hmac($algo, $payload, $secret);
//
//        // Check if hashes are equivalent
//        if ($hash !== $payloadHash) {
//            // Kill the script or do something else here.
//            die('Bad secret');
//        }
        system("echo here >> /tmp/pull.log");

        system("echo here >> /tmp/pull.log");

        system("cd /earBug/codeRepo/earBug >> /tmp/pull.log");
        system("/usr/bin/git pull origin master >> /tmp/pull.log");
    }
}