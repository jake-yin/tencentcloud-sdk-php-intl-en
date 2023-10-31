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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateZone response structure.
 *
 * @method string getZoneId() Obtain Site ID.
 * @method void setZoneId(string $ZoneId) Set Site ID.
 * @method OwnershipVerification getOwnershipVerification() Obtain Site ownership verification information. After the site is created, you need to complete the ownership verification before the site can serve normally.

If `Type=partial`, add TXT records to your DNS provider or add files to the root DNS server, and then call [VerifyOwnership]() to complete verification. For more information, see [Ownership Verification](https://intl.cloud.tencent.com/document/product/1552/70789?from_cn_redirect=1).

If `Type = full`, switch the DNS server as instructed by [Modifying DNS Server](https://intl.cloud.tencent.com/document/product/1552/90452?from_cn_redirect=1). Then call [VerifyOwnership]() to check the result.

If `Type = noDomainAccess`, leave it blank. No action is required.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setOwnershipVerification(OwnershipVerification $OwnershipVerification) Set Site ownership verification information. After the site is created, you need to complete the ownership verification before the site can serve normally.

If `Type=partial`, add TXT records to your DNS provider or add files to the root DNS server, and then call [VerifyOwnership]() to complete verification. For more information, see [Ownership Verification](https://intl.cloud.tencent.com/document/product/1552/70789?from_cn_redirect=1).

If `Type = full`, switch the DNS server as instructed by [Modifying DNS Server](https://intl.cloud.tencent.com/document/product/1552/90452?from_cn_redirect=1). Then call [VerifyOwnership]() to check the result.

If `Type = noDomainAccess`, leave it blank. No action is required.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreateZoneResponse extends AbstractModel
{
    /**
     * @var string Site ID.
     */
    public $ZoneId;

    /**
     * @var OwnershipVerification Site ownership verification information. After the site is created, you need to complete the ownership verification before the site can serve normally.

If `Type=partial`, add TXT records to your DNS provider or add files to the root DNS server, and then call [VerifyOwnership]() to complete verification. For more information, see [Ownership Verification](https://intl.cloud.tencent.com/document/product/1552/70789?from_cn_redirect=1).

If `Type = full`, switch the DNS server as instructed by [Modifying DNS Server](https://intl.cloud.tencent.com/document/product/1552/90452?from_cn_redirect=1). Then call [VerifyOwnership]() to check the result.

If `Type = noDomainAccess`, leave it blank. No action is required.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $OwnershipVerification;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ZoneId Site ID.
     * @param OwnershipVerification $OwnershipVerification Site ownership verification information. After the site is created, you need to complete the ownership verification before the site can serve normally.

If `Type=partial`, add TXT records to your DNS provider or add files to the root DNS server, and then call [VerifyOwnership]() to complete verification. For more information, see [Ownership Verification](https://intl.cloud.tencent.com/document/product/1552/70789?from_cn_redirect=1).

If `Type = full`, switch the DNS server as instructed by [Modifying DNS Server](https://intl.cloud.tencent.com/document/product/1552/90452?from_cn_redirect=1). Then call [VerifyOwnership]() to check the result.

If `Type = noDomainAccess`, leave it blank. No action is required.
Note: This field may return·null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("OwnershipVerification",$param) and $param["OwnershipVerification"] !== null) {
            $this->OwnershipVerification = new OwnershipVerification();
            $this->OwnershipVerification->deserialize($param["OwnershipVerification"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
