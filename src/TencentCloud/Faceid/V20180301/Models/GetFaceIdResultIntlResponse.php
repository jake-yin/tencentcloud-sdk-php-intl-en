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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetFaceIdResultIntl response structure.
 *
 * @method string getResult() Obtain The return code of the verification result.
0: Succeeded.
1001: System error.
1004: Liveness detection and face comparison failed.
2004: The image passed in is too large or too small.
2012: Several faces were detected.
2013: No face was detected, or the face detected was incomplete.
2014: The image resolution is too low or the quality does not meet the requirements.
2015: Face comparison failed.
2016: The similarity did not reach the standard passing threshold.
-999: The verification process wasn't finished.
 * @method void setResult(string $Result) Set The return code of the verification result.
0: Succeeded.
1001: System error.
1004: Liveness detection and face comparison failed.
2004: The image passed in is too large or too small.
2012: Several faces were detected.
2013: No face was detected, or the face detected was incomplete.
2014: The image resolution is too low or the quality does not meet the requirements.
2015: Face comparison failed.
2016: The similarity did not reach the standard passing threshold.
-999: The verification process wasn't finished.
 * @method string getDescription() Obtain The description of the verification result.
 * @method void setDescription(string $Description) Set The description of the verification result.
 * @method string getBestFrame() Obtain The best frame screenshot (in Base64) obtained during the verification.
 * @method void setBestFrame(string $BestFrame) Set The best frame screenshot (in Base64) obtained during the verification.
 * @method string getVideo() Obtain The video file (Base64) for verification.
 * @method void setVideo(string $Video) Set The video file (Base64) for verification.
 * @method float getSimilarity() Obtain The similarity, with a value range of 0-100. A greater value indicates higher similarity. This parameter is returned only in the `compare` (liveness detection and face comparison) mode.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSimilarity(float $Similarity) Set The similarity, with a value range of 0-100. A greater value indicates higher similarity. This parameter is returned only in the `compare` (liveness detection and face comparison) mode.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getExtra() Obtain The pass-through parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtra(string $Extra) Set The pass-through parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetFaceIdResultIntlResponse extends AbstractModel
{
    /**
     * @var string The return code of the verification result.
0: Succeeded.
1001: System error.
1004: Liveness detection and face comparison failed.
2004: The image passed in is too large or too small.
2012: Several faces were detected.
2013: No face was detected, or the face detected was incomplete.
2014: The image resolution is too low or the quality does not meet the requirements.
2015: Face comparison failed.
2016: The similarity did not reach the standard passing threshold.
-999: The verification process wasn't finished.
     */
    public $Result;

    /**
     * @var string The description of the verification result.
     */
    public $Description;

    /**
     * @var string The best frame screenshot (in Base64) obtained during the verification.
     */
    public $BestFrame;

    /**
     * @var string The video file (Base64) for verification.
     */
    public $Video;

    /**
     * @var float The similarity, with a value range of 0-100. A greater value indicates higher similarity. This parameter is returned only in the `compare` (liveness detection and face comparison) mode.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Similarity;

    /**
     * @var string The pass-through parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Extra;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Result The return code of the verification result.
0: Succeeded.
1001: System error.
1004: Liveness detection and face comparison failed.
2004: The image passed in is too large or too small.
2012: Several faces were detected.
2013: No face was detected, or the face detected was incomplete.
2014: The image resolution is too low or the quality does not meet the requirements.
2015: Face comparison failed.
2016: The similarity did not reach the standard passing threshold.
-999: The verification process wasn't finished.
     * @param string $Description The description of the verification result.
     * @param string $BestFrame The best frame screenshot (in Base64) obtained during the verification.
     * @param string $Video The video file (Base64) for verification.
     * @param float $Similarity The similarity, with a value range of 0-100. A greater value indicates higher similarity. This parameter is returned only in the `compare` (liveness detection and face comparison) mode.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Extra The pass-through parameter.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("BestFrame",$param) and $param["BestFrame"] !== null) {
            $this->BestFrame = $param["BestFrame"];
        }

        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = $param["Video"];
        }

        if (array_key_exists("Similarity",$param) and $param["Similarity"] !== null) {
            $this->Similarity = $param["Similarity"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
