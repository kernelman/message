<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kernel Huang
 * Email: kernelman79@gmail.com
 * Date: 2018/11/17
 * Time: 1:53 PM
 */

namespace Message;

use \Exceptions\InvalidArgumentException;

/**
 * Handler message
 *
 * Class MessageHandler
 */
class Message {

    const OK                    = 'Request success: ';
    const NG                    = 'Request failed: ';
    const ERR_AUTHORIZATION     = 'Authorization error: ';
    const ERR_REQUIRED          = 'Required: ';
    const ERR_NON_OBJECT        = 'NonObject: ';
    const ERR_JSON_DE           = 'Decode JSON data format error: ';
    const ERR_JSON_EN           = 'Encode JSON data format error: ';
    const ERR_NOT_FOUND         = 'Not Found: ';
    const ERR_INVALID_ARGUMENT  = 'InvalidArgument: ';
    const ERR_FORMATTED         = 'Format error: ';
    const ERR_UNEXPECTED        = 'Unexpected: ';
    const ERR_UNSELECTED        = 'UnSelected: ';
    const ERR_UNCONNECTED       = 'Unconnected: ';
    const ERR_UN_READABLE       = 'UnReadable: ';
    const ERR_UN_WRITABLE       = 'UnWritable: ';
    const ERR_UN_EXECUTABLE     = 'UnExecutable: ';
    const ERR_UNSAVED           = 'UnSaved: ';
    const ERR_ALREADY_EXISTS    = 'AlreadyExists: ';
    const ERR_NONEMPTY          = 'NonEmpty: ';
    const STATUS_CODE           = 'Status code: ';

    /**
     * Process message
     *
     * @param null $message
     * @return null
     * @throws InvalidArgumentException
     */
    static public function process($message = null) {

        if ($message === null) {
            throw new InvalidArgumentException(self::ERR_REQUIRED . 'Message');
        }

        return $message;
    }
}
