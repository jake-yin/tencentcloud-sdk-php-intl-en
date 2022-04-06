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

namespace TencentCloud\Batch\V20170312;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Batch\V20170312\Models as Models;

/**
 * @method Models\AttachInstancesResponse AttachInstances(Models\AttachInstancesRequest $req) This API is used to add existing instances to the compute environment.
Considerations: <br/>
1. The instance should not be in the batch compute system.<br/>
2. The instance status should be 'running'.<br/>
3. It supports dedicated CVMs and pay-as-you-go instances that billed on an hourly basis. Spot instances are not supported.<b/>

For instances added to the compute environment, their UserData will be reset and the operating systems will be reinstalled.
 * @method Models\CreateComputeEnvResponse CreateComputeEnv(Models\CreateComputeEnvRequest $req) This API is used to create a compute environment.
 * @method Models\CreateTaskTemplateResponse CreateTaskTemplate(Models\CreateTaskTemplateRequest $req) This API is used to create a task template.
 * @method Models\DeleteComputeEnvResponse DeleteComputeEnv(Models\DeleteComputeEnvRequest $req) This API is used to delete a compute environment.
 * @method Models\DeleteJobResponse DeleteJob(Models\DeleteJobRequest $req) This API is used to delete a job.
Deleting a job is equivalent to deleting all the information related to the job. After successful deletion, all information related to the job cannot be queried.
The job to be deleted must be in a completed state, and all task instances contained in it must also be in a completed state; otherwise, the operation will be prohibited. The completed state can be either SUCCEED or FAILED.
 * @method Models\DeleteTaskTemplatesResponse DeleteTaskTemplates(Models\DeleteTaskTemplatesRequest $req) This API is used to delete task template information.
 * @method Models\DescribeAvailableCvmInstanceTypesResponse DescribeAvailableCvmInstanceTypes(Models\DescribeAvailableCvmInstanceTypesRequest $req) This API is used to view the information of available CVM model configurations.
 * @method Models\DescribeComputeEnvResponse DescribeComputeEnv(Models\DescribeComputeEnvRequest $req) This API is used to query compute environment details.
 * @method Models\DescribeComputeEnvActivitiesResponse DescribeComputeEnvActivities(Models\DescribeComputeEnvActivitiesRequest $req) This API is used to query the information of activities in the compute environment.
 * @method Models\DescribeComputeEnvCreateInfoResponse DescribeComputeEnvCreateInfo(Models\DescribeComputeEnvCreateInfoRequest $req) Views compute environment creation information.
 * @method Models\DescribeComputeEnvCreateInfosResponse DescribeComputeEnvCreateInfos(Models\DescribeComputeEnvCreateInfosRequest $req) This API is used to view the list of information of compute environment creation, including name, description, type, environment parameters, notifications, and number of desired nodes.
 * @method Models\DescribeComputeEnvsResponse DescribeComputeEnvs(Models\DescribeComputeEnvsRequest $req) This API is used to view the list of compute environments.
 * @method Models\DescribeCvmZoneInstanceConfigInfosResponse DescribeCvmZoneInstanceConfigInfos(Models\DescribeCvmZoneInstanceConfigInfosRequest $req) This API is used to get the model configuration information of the availability zone of BatchCompute.
 * @method Models\DescribeInstanceCategoriesResponse DescribeInstanceCategories(Models\DescribeInstanceCategoriesRequest $req) Currently, CVM instance families are classified into different category, and each category contains several instance families. This API is used to query the instance category information.
 * @method Models\DescribeJobResponse DescribeJob(Models\DescribeJobRequest $req) This API is used to view the details of a job, including internal task (Task) and dependency (Dependence) information.
 * @method Models\DescribeJobSubmitInfoResponse DescribeJobSubmitInfo(Models\DescribeJobSubmitInfoRequest $req) This API is used to query the submission information of the specified job, with the return including the job submission information used as input parameters in the JobId and SubmitJob APIs.
 * @method Models\DescribeJobsResponse DescribeJobs(Models\DescribeJobsRequest $req) This API is used to query the overview information of several instances.
 * @method Models\DescribeTaskResponse DescribeTask(Models\DescribeTaskRequest $req) This API is used to query the details of a specified task, including information of the task instances inside the task.
 * @method Models\DescribeTaskLogsResponse DescribeTaskLogs(Models\DescribeTaskLogsRequest $req) This API is used to get the standard outputs and standard error logs of multiple task instances.
 * @method Models\DescribeTaskTemplatesResponse DescribeTaskTemplates(Models\DescribeTaskTemplatesRequest $req) This API is used to query the information of task templates.
 * @method Models\DetachInstancesResponse DetachInstances(Models\DetachInstancesRequest $req) This API is used to remove instances that from compute environment. 
 * @method Models\ModifyComputeEnvResponse ModifyComputeEnv(Models\ModifyComputeEnvRequest $req) This API is used to modify the attributes of a compute environment.
 * @method Models\ModifyTaskTemplateResponse ModifyTaskTemplate(Models\ModifyTaskTemplateRequest $req) This API is used to modify a task template.
 * @method Models\RetryJobsResponse RetryJobs(Models\RetryJobsRequest $req) This API is used to retry the failing task instance in instances.
Job retry is supported only if a job is in the "FAILED" state. After the retry operation succeeds, the instance will retry the failing task instances in each task in turn according to the task dependencies specified in the "DAG". The history information of the task instances will be reset, the instances will participate in subsequent scheduling and execution as if they are run for the first time.
 * @method Models\TerminateComputeNodeResponse TerminateComputeNode(Models\TerminateComputeNodeRequest $req) This API is used to terminate a compute node.
Termination is allowed for nodes in the CREATED, CREATION_FAILED, RUNNING or ABNORMAL state.
 * @method Models\TerminateComputeNodesResponse TerminateComputeNodes(Models\TerminateComputeNodesRequest $req) This API is used to terminate compute nodes in batches. It is not allowed to repeatedly terminate the same node.
 * @method Models\TerminateJobResponse TerminateJob(Models\TerminateJobRequest $req) This API is used to terminate an instance.
Termination is prohibited if an instance is in the "SUBMITTED" state and does not take effect if it is in the "SUCCEED" state.
Instance termination is an asynchronous process, and the time it takes to complete the entire process is directly proportional to the total number of tasks. The effect of terminating an instance is equivalent to performing the TerminateTaskInstance operation on all the task instances contained in the job. For more information on the specific effect and usage, see TerminateTaskInstance.
 * @method Models\TerminateTaskInstanceResponse TerminateTaskInstance(Models\TerminateTaskInstanceRequest $req) This API is used to terminate a task instance.
Task instances in the "SUCCEED" or "FAILED" state will not be processed.
Task instances in the "SUBMITTED", "PENDING", or "RUNNABLE" state will be set to the "FAILED" state.
For task instances in the "STARTING", "RUNNING", or "FAILED_INTERRUPTED" state, there will be two cases: if no compute environment is specified, the CVM instance will be terminated first, and then the state will be set to "FAILED"; if a compute environment's EnvId is specified, the state of the task instances will be set to "FAILED" first, and then the CVM instance that performs the task will be restarted. Both cases takes a certain amount of time to be completed.
For task instances in the "FAILED_INTERRUPTED" state, the related resources and quotas will be released only after the termination actually succeeds.
 */

class BatchClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "batch.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "batch";

    /**
     * @var string
     */
    protected $version = "2017-03-12";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("batch")."\\"."V20170312\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
