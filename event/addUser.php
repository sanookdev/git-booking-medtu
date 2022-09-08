<div class="modal fade" id="add_employee" tabindex="-1" aria-labelledby="add_employee" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มผู้ใช้งาน</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <input type="date" class="form-control form-control-sm" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control form-control-sm" minlength="13" maxlength="13" name="id_card" placeholder="บัตรประชาชน" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control form-control-sm" placeholder="ชื่อ..." name="fname" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control form-control-sm" placeholder="นามสกุล..." name="lname" required>
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control form-control-sm" placeholder="เบอร์โทร" name="phone" minlength="10" maxlength="10" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-control form-control-sm" name="stats">
                            <option value="">สถานะ</option>
                            <option value="0">ผู้ใช้งาน</option>
                            <option value="1">ผู้ดูแลระบบ</option>
                            <option value="2">ผู้ดูแลระบบ</option>
                        </select>
                    </div>
                    <span>ห้องอนุมัติได้</span>
                    <div class="mb-3 ml-3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="adminRoom1">
                            <label class="custom-control-label" for="adminRoom1">ห้องประชุม 1 / ชั้น 4</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="adminRoom2">
                            <label class="custom-control-label" for="adminRoom2">ห้องประชุม 1 / ชั้น 6</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="adminRoom2">
                            <label class="custom-control-label" for="adminRoom2">ห้องประชุม 2 / ชั้น 6</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="adminRoom2">
                            <label class="custom-control-label" for="adminRoom2">ห้องประชุม 1 / ชั้น 5</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-sm btn-success btn-block">บันทึก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>