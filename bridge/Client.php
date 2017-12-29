<?php
function __autoload($className) {
    $fileName = __DIR__ . '/' .$className . ".php";
    if (file_exists($fileName)) {
        require $fileName;
    } else {
        throw new Exception($className . ' not exist');
    }
}
class Client {
    public function run() {
        /**
         * 站内信、邮件、手机短信
         */
        foreach ([MessageSms::class, MessageEmail::class, MessageMobile::class] as $_k1 => $message) {
            $impl = new $message();
            if (!$impl instanceof MessageImplementor) {
                throw new Exception('消息形式不合法');
            }
            /**
             * 普通、加急、特急
             */
            foreach ([CommonMessage::class, UrgencyMessage::class, SpecialUrgencyMessage::class] as $_k2 => $type) {
                $m = new $type($impl);
                if (!$m instanceof AbstractMessage) {
                    throw new Exception('消息类型不合法');
                }
                $m->sendMessage('请喝一杯茶', ($_k1 + 1) . ($_k2 + 1));
            }
        }
    }
}

(new Client())->run();