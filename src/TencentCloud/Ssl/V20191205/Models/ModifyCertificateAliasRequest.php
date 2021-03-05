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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCertificateAlias request structure.
 *
 * @method string getCertificateId() Obtain Certificate ID
 * @method void setCertificateId(string $CertificateId) Set Certificate ID
 * @method string getAlias() Obtain Alias
 * @method void setAlias(string $Alias) Set Alias
 */
class ModifyCertificateAliasRequest extends AbstractModel
{
    /**
     * @var string Certificate ID
     */
    public $CertificateId;

    /**
     * @var string Alias
     */
    public $Alias;

    /**
     * @param string $CertificateId Certificate ID
     * @param string $Alias Alias
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
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }
    }
}
