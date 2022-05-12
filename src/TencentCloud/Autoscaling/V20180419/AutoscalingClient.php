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

namespace TencentCloud\Autoscaling\V20180419;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Autoscaling\V20180419\Models as Models;

/**
 * @method Models\AttachInstancesResponse AttachInstances(Models\AttachInstancesRequest $req) This API (AttachInstances) is used to add CVM instances to an auto scaling group.

 * @method Models\AttachLoadBalancersResponse AttachLoadBalancers(Models\AttachLoadBalancersRequest $req) This API is used to add CLBs to a security group.
 * @method Models\ClearLaunchConfigurationAttributesResponse ClearLaunchConfigurationAttributes(Models\ClearLaunchConfigurationAttributesRequest $req) This API is used to clear specific attributes of the launch configuration.
 * @method Models\CompleteLifecycleActionResponse CompleteLifecycleAction(Models\CompleteLifecycleActionRequest $req) This API (CompleteLifecycleAction) is used to complete a lifecycle action.

* The result ("CONTINUE" or "ABANDON") of a specific lifecycle hook can be specified by calling this API. If this API is not called at all, the lifecycle hook will be processed based on the "DefaultResult" after timeout.

 * @method Models\CreateAutoScalingGroupResponse CreateAutoScalingGroup(Models\CreateAutoScalingGroupRequest $req) This API (CreateAutoScalingGroup) is used to create an auto scaling group.
 * @method Models\CreateAutoScalingGroupFromInstanceResponse CreateAutoScalingGroupFromInstance(Models\CreateAutoScalingGroupFromInstanceRequest $req) This API is used to create launch configurations and scaling groups based on an instance.

Note: for a scaling group that is created based on a monthly-subscribed instance, the instances added for scale-out are pay-as-you-go instance.
 * @method Models\CreateLifecycleHookResponse CreateLifecycleHook(Models\CreateLifecycleHookRequest $req) This API (CreateLifeCycleHook) is used to create a lifecycle hook.

* You can configure message notifications in the following format for lifecycle hooks, which will be sent to your CMQ queue by AS:

```
{
	"Service": "Tencent Cloud Auto Scaling",
	"Time": "2019-03-14T10:15:11Z",
	"AppId": "1251783334",
	"ActivityId": "asa-fznnvrja",
	"AutoScalingGroupId": "asg-rrrrtttt",
	"LifecycleHookId": "ash-xxxxyyyy",
	"LifecycleHookName": "my-hook",
	"LifecycleActionToken": "3080e1c9-0efe-4dd7-ad3b-90cd6618298f",
	"InstanceId": "ins-aaaabbbb",
	"LifecycleTransition": "INSTANCE_LAUNCHING",
	"NotificationMetadata": ""
}
```
 * @method Models\CreateNotificationConfigurationResponse CreateNotificationConfiguration(Models\CreateNotificationConfigurationRequest $req) This API is used to create a notification policy.
When the notification is sent to a CMQ topic or queue, the following contents are included:
```
{
    "Service": "Tencent Cloud Auto Scaling",
    "CreatedTime": "2021-10-11T10:15:11Z", // Activity creation time
    "AppId": "100000000",
    "ActivityId": "asa-fznnvrja", // Scaling activity ID
    "AutoScalingGroupId": "asg-pc2oqu2z", // Scaling group ID
    "ActivityType": "SCALE_OUT",  // Scaling activity type
    "StatusCode": "SUCCESSFUL",   // Scaling activity result
    "Description": "Activity was launched in response to a difference between desired capacity and actual capacity,
    scale out 1 instance(s).", // Scaling activity description
    "StartTime": "2021-10-11T10:15:11Z",  // Activity starting time
    "EndTime": "2021-10-11T10:15:32Z",    // Activity ending time
    "DetailedStatusMessageSet": [ // A collection of failed attempts during the scaling process (Failed attempts are allowed in a successful scaling activity)
        {
            "Code": "InvalidInstanceType",
            "Zone": "ap-guangzhou-2",
            "InstanceId": "",
            "InstanceChargeType": "POSTPAID_BY_HOUR",
            "SubnetId": "subnet-4t5mgeuu",
            "Message": "The specified instance type `S5.LARGE8` is invalid in `subnet-4t5mgeuu`, `ap-guangzhou-2`.",
            "InstanceType": "S5.LARGE8",
        }
    ]
}
```
 * @method Models\CreateScalingPolicyResponse CreateScalingPolicy(Models\CreateScalingPolicyRequest $req) This API (CreateScalingPolicy) is used to create an alarm trigger policy.
 * @method Models\CreateScheduledActionResponse CreateScheduledAction(Models\CreateScheduledActionRequest $req) This API (CreateScheduledAction) is used to create a scheduled task.
 * @method Models\DeleteAutoScalingGroupResponse DeleteAutoScalingGroup(Models\DeleteAutoScalingGroupRequest $req) This API (DeleteAutoScalingGroup) is used to delete the specified auto scaling group that has no instances and remains inactive.
 * @method Models\DeleteLaunchConfigurationResponse DeleteLaunchConfiguration(Models\DeleteLaunchConfigurationRequest $req) This API (DeleteLaunchConfiguration) is used to delete a launch configuration.

* If the launch configuration is active in an auto scaling group, it cannot be deleted.

 * @method Models\DeleteLifecycleHookResponse DeleteLifecycleHook(Models\DeleteLifecycleHookRequest $req) This API (DeleteLifeCycleHook) is used to delete a lifecycle hook.
 * @method Models\DeleteNotificationConfigurationResponse DeleteNotificationConfiguration(Models\DeleteNotificationConfigurationRequest $req) This API (DeleteNotificationConfiguration) is used to delete the specified notification.
 * @method Models\DeleteScalingPolicyResponse DeleteScalingPolicy(Models\DeleteScalingPolicyRequest $req) This API (DeleteScalingPolicy) is used to delete an alarm trigger policy.
 * @method Models\DeleteScheduledActionResponse DeleteScheduledAction(Models\DeleteScheduledActionRequest $req) This API (DeleteScheduledAction) is used to delete the specified scheduled task.
 * @method Models\DescribeAccountLimitsResponse DescribeAccountLimits(Models\DescribeAccountLimitsRequest $req) This API (DescribeAccountLimits) is used to query the limits of user's AS resources.
 * @method Models\DescribeAutoScalingActivitiesResponse DescribeAutoScalingActivities(Models\DescribeAutoScalingActivitiesRequest $req) This API (DescribeAutoScalingActivities) is used to query the activity history of an auto scaling group.
 * @method Models\DescribeAutoScalingAdvicesResponse DescribeAutoScalingAdvices(Models\DescribeAutoScalingAdvicesRequest $req) This API is used to query suggestions for scaling group configurations.
 * @method Models\DescribeAutoScalingGroupLastActivitiesResponse DescribeAutoScalingGroupLastActivities(Models\DescribeAutoScalingGroupLastActivitiesRequest $req) This API is used to query the latest activity history of an auto scaling group.
 * @method Models\DescribeAutoScalingGroupsResponse DescribeAutoScalingGroups(Models\DescribeAutoScalingGroupsRequest $req) This API (DescribeAutoScalingGroups) is used to query the information of auto scaling groups.

* You can query the details of auto scaling groups based on information such as auto scaling group ID, auto scaling group name, or launch configuration ID. For more information on filters, see `Filter`.
* If the parameter is empty, a certain number (specified by `Limit` and 20 by default) of auto scaling groups of the current user will be returned.
 * @method Models\DescribeAutoScalingInstancesResponse DescribeAutoScalingInstances(Models\DescribeAutoScalingInstancesRequest $req) This API (DescribeAutoScalingInstances) is used to query the information of instances associated with AS.

* You can query the details of instances based on information such as instance ID and auto scaling group ID. For more information on filters, see `Filter`.
* If the parameter is empty, a certain number (specified by `Limit` and 20 by default) of instances of the current user will be returned.
 * @method Models\DescribeLifecycleHooksResponse DescribeLifecycleHooks(Models\DescribeLifecycleHooksRequest $req) This API (DescribeLifecycleHooks) is used to query the information of lifecycle hooks.

* You can query the details of lifecycle hooks based on information such as auto scaling group ID, lifecycle hook ID, or lifecycle hook name. For more information on filters, see `Filter`.
* If the parameter is empty, a certain number (specified by `Limit` and 20 by default) of lifecycle hooks of the current user will be returned.
 * @method Models\DescribeNotificationConfigurationsResponse DescribeNotificationConfigurations(Models\DescribeNotificationConfigurationsRequest $req) This API (DescribeNotificationConfigurations) is used to query the information of one or more notifications.

You can query the details of notifications based on information such as notification ID and auto scaling group ID. For more information on filters, see `Filter`.
If the parameter is empty, a certain number (specified by `Limit` and 20 by default) of notifications of the current user will be returned.
 * @method Models\DescribeScalingPoliciesResponse DescribeScalingPolicies(Models\DescribeScalingPoliciesRequest $req) This API (DescribeScalingPolicies) is used to query alarm trigger policies.
 * @method Models\DescribeScheduledActionsResponse DescribeScheduledActions(Models\DescribeScheduledActionsRequest $req) This API (DescribeScheduledActions) is used to query the details of one or more scheduled tasks.

* You can query the details of scheduled tasks based on information such as scheduled task ID, scheduled task name, or auto scaling group ID. For more information on filters, see `Filter`.
* If the parameter is empty, a certain number (specified by `Limit` and 20 by default) of scheduled tasks of the current user will be returned.
 * @method Models\DetachInstancesResponse DetachInstances(Models\DetachInstancesRequest $req) This API is used to remove CVM instances from a scaling group. Instances removed via this API will not be terminated.
* If the number of remaining `IN_SERVICE` instances in the scaling group is less than the minimum capacity, this API will return an error.
* However, if the scaling group is in `DISABLED` status, the removal will not verify the relationship between the number of `IN_SERVICE` instances and the minimum capacity.
* This removal will unassociate the CVM from the CLB instance that has been configured for the scaling group.
 * @method Models\DetachLoadBalancersResponse DetachLoadBalancers(Models\DetachLoadBalancersRequest $req) This API is used to unbind one or more CLBs from a scaling group. This API will not terminate CLBs.
 * @method Models\EnableAutoScalingGroupResponse EnableAutoScalingGroup(Models\EnableAutoScalingGroupRequest $req) This API (EnableAutoScalingGroup) is used to enable the specified auto scaling group.
 * @method Models\ExecuteScalingPolicyResponse ExecuteScalingPolicy(Models\ExecuteScalingPolicyRequest $req) This API (ExecuteScalingPolicy) is used to execute a scaling policy.

* The scaling policy can be executed based on the scaling policy ID.
* When the auto scaling group to which the scaling policy belongs is performing a scaling activity, the scaling policy will be rejected.
 * @method Models\ModifyAutoScalingGroupResponse ModifyAutoScalingGroup(Models\ModifyAutoScalingGroupRequest $req) This API (ModifyAutoScalingGroup) is used to modify an auto scaling group.
 * @method Models\ModifyDesiredCapacityResponse ModifyDesiredCapacity(Models\ModifyDesiredCapacityRequest $req) This API (ModifyDesiredCapacity) is used to modify the desired number of instances in the specified auto scaling group.
 * @method Models\ModifyLaunchConfigurationAttributesResponse ModifyLaunchConfigurationAttributes(Models\ModifyLaunchConfigurationAttributesRequest $req) This API (ModifyLaunchConfigurationAttributes) is used to modify some attributes of a launch configuration.

* The changes of launch configuration do not affect the existing instances. New instances will be created based on the modified configuration.
* This API supports modifying certain simple types of attributes.
 * @method Models\ModifyLifecycleHookResponse ModifyLifecycleHook(Models\ModifyLifecycleHookRequest $req) This API is used to modify the lifecycle hook.
 * @method Models\ModifyLoadBalancerTargetAttributesResponse ModifyLoadBalancerTargetAttributes(Models\ModifyLoadBalancerTargetAttributesRequest $req) This API is used to modify the target rule attributes of the CLB in the scaling group.
 * @method Models\ModifyLoadBalancersResponse ModifyLoadBalancers(Models\ModifyLoadBalancersRequest $req) This API is used to modify the cloud load balancers of a scaling group.

* This API can specify a new cloud load balancer configuration for the scaling group. The new configuration overwrites the original load balancer configuration.
* To clear the cloud load balancer of the scaling group, specify only the scaling group ID but not the specific cloud load balancer.
* This API modifies the cloud load balancer of the scaling group and generate a scaling activity to asynchronously modify the cloud load balancers of existing instances.
 * @method Models\ModifyNotificationConfigurationResponse ModifyNotificationConfiguration(Models\ModifyNotificationConfigurationRequest $req) This API is used to modify a notification policy.
* The receiver type of the notification policy cannot be modified.
 * @method Models\ModifyScalingPolicyResponse ModifyScalingPolicy(Models\ModifyScalingPolicyRequest $req) This API (ModifyScalingPolicy) is used to modify an alarm trigger policy.
 * @method Models\ModifyScheduledActionResponse ModifyScheduledAction(Models\ModifyScheduledActionRequest $req) This API (ModifyScheduledAction) is used to modify a scheduled task.
 * @method Models\RemoveInstancesResponse RemoveInstances(Models\RemoveInstancesRequest $req) This API is used to delete CVM instances from a scaling group. Instances that are automatically created through AS will be terminated, while those manually added to the scaling group will be removed and retained.
* If the number of remaining `IN_SERVICE` instances in the scaling group is less than the minimum capacity, this API will return an error.
* However, if the scaling group is in `DISABLED` status, the removal will not verify the relationship between the number of `IN_SERVICE` instances and the minimum capacity.
* This removal will unassociate the CVM from the CLB instance that has been configured for the scaling group.
 * @method Models\SetInstancesProtectionResponse SetInstancesProtection(Models\SetInstancesProtectionRequest $req) This API is used to enable scale-in protection for an instance.
When scale-in protection is enabled, the instance will not be removed in scale-in activities triggered by replacement of unhealthy instances, alarm threshold reached, change of desired quantity, etc.
 * @method Models\StartAutoScalingInstancesResponse StartAutoScalingInstances(Models\StartAutoScalingInstancesRequest $req) This API is used to start up CVM instances in a scaling group.
* After startup, the instance will be in the `IN_SERVICE` status, which will increase the desired capacity. Please note that the desired capacity cannot exceed the maximum value.
* This API supports batch operation. Up to 100 instances can be started up in each request.
 * @method Models\StopAutoScalingInstancesResponse StopAutoScalingInstances(Models\StopAutoScalingInstancesRequest $req) This API is used to shut down CVM instances in a scaling group.
* Use the `SOFT_FIRST` shutdown, which means the CVM will be forcibly shut down if the soft shutdown fails.
* Shutting down instances in the `IN_SERVICE` status will reduce the desired capacity, but the desired capacity cannot be less than the minimum value.
* To use the `STOP_CHARGING` shutdown, the instances you want to shut down must satisfy the conditions of [no charges when shut down](https://intl.cloud.tencent.com/document/product/213/19918?from_cn_redirect=1).
* This API supports batch operation. Up to 100 instances can be shut down in each request.
 * @method Models\UpgradeLifecycleHookResponse UpgradeLifecycleHook(Models\UpgradeLifecycleHookRequest $req) This API (UpgradeLifecycleHook) is used to upgrade a lifecycle hook.

* This API is used to upgrade a lifecycle hook in a "completely overriding" manner, i.e., it uniformly sets a new configuration according to the API parameters regardless of the original parameters. If optional fields are left empty, their default values will be used.
 */

class AutoscalingClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "as.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "as";

    /**
     * @var string
     */
    protected $version = "2018-04-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("autoscaling")."\\"."V20180419\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
