<div id="editModal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-10">
                <div class="flex flex-col sm:flex-row items-center">
                    <h1 class="font-medium text-base">
                        Edit Coupon
                    </h1>

                </div>
                <!-- Edit Form -->
                <form id="couponEditForm" method="post">
                    @method('PUT')
                    @csrf
                    <div id="input" class="mt-6">
                        <div class="preview">
                            <div class="mb-3">
                                <label for="regular-form-1" class="form-label">Coupon Code</label>
                                <input id="regular-form-1" type="text" name="coupon_code" class="form-control code"
                                       placeholder="Enter Category Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="regular-form-1" class="form-label">Coupon Percentage</label>
                                <input id="regular-form-1" type="text" name="percentage" class="form-control percentage"
                                       placeholder="Enter Category Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="regular-form-1" class="form-label">Coupon User Limit</label>
                                <input id="regular-form-1" type="number" name="user_limit" class="form-control limit"
                                       placeholder="Enter User Limit" required>
                            </div>
                            <div class="mb-3">
                                <label for="regular-form-1" class="form-label">Valid Till</label>
                                <input id="regular-form-1" type="date" name="valid_till" class="form-control valid"
                                       placeholder="Enter Category Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-6 sm:mt-2">
                        <label class="form-check-label ml-0" for="show-example-1">Active/Disable</label>
                        <input id="show-example-1"
                               class="show-code form-check-input mr-0 ml-3 checkStatus" name="status" type="checkbox">
                    </div>
                    <div class="buttons flex justify-between" style="margin-top: 20px;">
                        <a id="editModal-hide-modal" href="javascript:;" class="btn btn-danger mr-1">Cancel</a>
                        <button type="submit" class="btn btn-primary mr-1">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
