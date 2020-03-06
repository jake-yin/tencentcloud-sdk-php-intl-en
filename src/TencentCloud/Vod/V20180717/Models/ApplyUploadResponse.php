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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getStorageBucket() Obtain Bucket, which is used as the `bucket_name` in the URL of the upload API.
 * @method void setStorageBucket(string $StorageBucket) Set Bucket, which is used as the `bucket_name` in the URL of the upload API.
 * @method string getStorageRegion() Obtain Storage region, which is used as the `Region` in the `Host` of the upload API.
 * @method void setStorageRegion(string $StorageRegion) Set Storage region, which is used as the `Region` in the `Host` of the upload API.
 * @method string getVodSessionKey() Obtain VOD session, which is used to confirm the `VodSessionKey` parameter of the upload API.
 * @method void setVodSessionKey(string $VodSessionKey) Set VOD session, which is used to confirm the `VodSessionKey` parameter of the upload API.
 * @method string getMediaStoragePath() Obtain Media storage path, which is used as the `Key` of the stored media of the upload API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMediaStoragePath(string $MediaStoragePath) Set Media storage path, which is used as the `Key` of the stored media of the upload API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCoverStoragePath() Obtain Cover storage path, which is used as the `Key` of the stored cover of the upload API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCoverStoragePath(string $CoverStoragePath) Set Cover storage path, which is used as the `Key` of the stored cover of the upload API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method TempCertificate getTempCertificate() Obtain Temporary credential, which is used for authentication of the upload API.
 * @method void setTempCertificate(TempCertificate $TempCertificate) Set Temporary credential, which is used for authentication of the upload API.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *ApplyUpload response structure.
 */
class ApplyUploadResponse extends AbstractModel
{
    /**
     * @var string Bucket, which is used as the `bucket_name` in the URL of the upload API.
     */
    public $StorageBucket;

    /**
     * @var string Storage region, which is used as the `Region` in the `Host` of the upload API.
     */
    public $StorageRegion;

    /**
     * @var string VOD session, which is used to confirm the `VodSessionKey` parameter of the upload API.
     */
    public $VodSessionKey;

    /**
     * @var string Media storage path, which is used as the `Key` of the stored media of the upload API.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MediaStoragePath;

    /**
     * @var string Cover storage path, which is used as the `Key` of the stored cover of the upload API.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CoverStoragePath;

    /**
     * @var TempCertificate Temporary credential, which is used for authentication of the upload API.
     */
    public $TempCertificate;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param string $StorageBucket Bucket, which is used as the `bucket_name` in the URL of the upload API.
     * @param string $StorageRegion Storage region, which is used as the `Region` in the `Host` of the upload API.
     * @param string $VodSessionKey VOD session, which is used to confirm the `VodSessionKey` parameter of the upload API.
     * @param string $MediaStoragePath Media storage path, which is used as the `Key` of the stored media of the upload API.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CoverStoragePath Cover storage path, which is used as the `Key` of the stored cover of the upload API.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param TempCertificate $TempCertificate Temporary credential, which is used for authentication of the upload API.
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
        if (array_key_exists("StorageBucket",$param) and $param["StorageBucket"] !== null) {
            $this->StorageBucket = $param["StorageBucket"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("VodSessionKey",$param) and $param["VodSessionKey"] !== null) {
            $this->VodSessionKey = $param["VodSessionKey"];
        }

        if (array_key_exists("MediaStoragePath",$param) and $param["MediaStoragePath"] !== null) {
            $this->MediaStoragePath = $param["MediaStoragePath"];
        }

        if (array_key_exists("CoverStoragePath",$param) and $param["CoverStoragePath"] !== null) {
            $this->CoverStoragePath = $param["CoverStoragePath"];
        }

        if (array_key_exists("TempCertificate",$param) and $param["TempCertificate"] !== null) {
            $this->TempCertificate = new TempCertificate();
            $this->TempCertificate->deserialize($param["TempCertificate"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
