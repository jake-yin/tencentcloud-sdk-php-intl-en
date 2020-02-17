<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getKeyId() Obtain Unique ID of a CMK, which is used to specify the CMK into which to import key material.
 * @method void setKeyId(string $KeyId) Set Unique ID of a CMK, which is used to specify the CMK into which to import key material.
 * @method string getImportToken() Obtain The token required for importing key material, which is used as a parameter for `ImportKeyMaterial`.
 * @method void setImportToken(string $ImportToken) Set The token required for importing key material, which is used as a parameter for `ImportKeyMaterial`.
 * @method string getPublicKey() Obtain The Base64-encoded RSA public key used to encrypt key material before importing it with `ImportKeyMaterial`.
 * @method void setPublicKey(string $PublicKey) Set The Base64-encoded RSA public key used to encrypt key material before importing it with `ImportKeyMaterial`.
 * @method integer getParametersValidTo() Obtain Validity period of the token and public key. A token and public key can only be imported when they are valid. If they are expired, you will need to call the `GetParametersForImport` API again to get a new token and public key.
 * @method void setParametersValidTo(integer $ParametersValidTo) Set Validity period of the token and public key. A token and public key can only be imported when they are valid. If they are expired, you will need to call the `GetParametersForImport` API again to get a new token and public key.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *GetParametersForImport response structure.
 */
class GetParametersForImportResponse extends AbstractModel
{
    /**
     * @var string Unique ID of a CMK, which is used to specify the CMK into which to import key material.
     */
    public $KeyId;

    /**
     * @var string The token required for importing key material, which is used as a parameter for `ImportKeyMaterial`.
     */
    public $ImportToken;

    /**
     * @var string The Base64-encoded RSA public key used to encrypt key material before importing it with `ImportKeyMaterial`.
     */
    public $PublicKey;

    /**
     * @var integer Validity period of the token and public key. A token and public key can only be imported when they are valid. If they are expired, you will need to call the `GetParametersForImport` API again to get a new token and public key.
     */
    public $ParametersValidTo;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param string $KeyId Unique ID of a CMK, which is used to specify the CMK into which to import key material.
     * @param string $ImportToken The token required for importing key material, which is used as a parameter for `ImportKeyMaterial`.
     * @param string $PublicKey The Base64-encoded RSA public key used to encrypt key material before importing it with `ImportKeyMaterial`.
     * @param integer $ParametersValidTo Validity period of the token and public key. A token and public key can only be imported when they are valid. If they are expired, you will need to call the `GetParametersForImport` API again to get a new token and public key.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    function __construct()
    {

    }
    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("ImportToken",$param) and $param["ImportToken"] !== null) {
            $this->ImportToken = $param["ImportToken"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("ParametersValidTo",$param) and $param["ParametersValidTo"] !== null) {
            $this->ParametersValidTo = $param["ParametersValidTo"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
