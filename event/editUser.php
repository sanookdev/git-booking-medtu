<div class="modal fade" id="employee_edit_details1" tabindex="-1" aria-labelledby="employee_edit_details1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูลผู้ใช้งาน</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <input type="date" class="form-control form-control-sm" value="2020-09-01" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control form-control-sm" name="id_card" placeholder="บัตรประชาชน" value="1103000076902" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control form-control-sm" placeholder="ชื่อ..." name="fname" value="วรัตถ์" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control form-control-sm" placeholder="นามสกุล..." name="lname" value="สุภาพร" required>
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control form-control-sm" placeholder="เบอร์โทร" name="phone" value="0909918575" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-control form-control-sm" name="stats">
                            <option value="0">ผู้ใช้งาน</option>
                            <option value="1">ผู้ดูแลระบบ</option>
                            <option value="2" selected>ผู้ดูแลห้อง</option>
                        </select>
                    </div>
                    <span>ห้องที่อนุมัติได้</span>
                    <div class="mb-3 ml-3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="adminRoom1">
                            <label class="custom-control-label" for="adminRoom1">ห้องประชุม 1 / ชั้น 4</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="adminRoom2" checked>
                            <label class="custom-control-label" for="adminRoom2">ห้องประชุม 1 / ชั้น 6</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="adminRoom3" checked>
                            <label class="custom-control-label" for="adminRoom2">ห้องประชุม 2 / ชั้น 6</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="adminRoom4" checked>
                            <label class="custom-control-label" for="adminRoom4">ห้องประชุม 1 / ชั้น 5</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-sm btn-success btn-block">อัพเดต</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>