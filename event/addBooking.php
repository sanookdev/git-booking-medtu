    <div class="modal fade" id="add_booking" tabindex="-1" aria-labelledby="add_booking" aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มรายการจอง</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="insertBooking">
                        <div class="mb-3 ">
                            <label for="member">ผู้จอง</label>
                            <input type="text" class="form-control form-control-sm" value="นายวรัตถ์ สุภาพร"
                                name="member" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="topic">หัวข้อการประชุม</label>
                            <input type="text" class="form-control form-control-sm" placeholder="หัวข้อการประชุม"
                                name="topic" required>
                        </div>
                        <div class="form-row">
                            <div class="mb-3 col-9">
                                <label for="building_name">ตึก</label>
                                <select style='width:100%' type='text' name='building_name' id='building_name'
                                    class='form-control form-control-sm' required></select>
                            </div>
                            <div class="mb-3 col-3">
                                <label for="class_no">ชั้น</label>
                                <select style='width:100%' type='text' name='class_no' id='class_no'
                                    class='form-control form-control-sm' disabled required></select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="name_room">ห้องประชุม</label>
                            <select style='width:100%' type='text' name='name_room' id='name_room'
                                class='form-control form-control-sm' disabled required></select>
                        </div>
                        <div class="form-row">
                            <div class="mb-3 col-6">
                                <label for="start_date">เริ่ม</label>
                                <input type="datetime-local" class="form-control form-control-sm" name="start_date"
                                    id="start_date" disabled required>
                                <div class="err start_err"></div>
                            </div>
                            <div class=" mb-3 col-6">
                                <label for="end_date">สิ้นสุด</label>
                                <input type="datetime-local" class="form-control form-control-sm" name="end_date"
                                    id="end_date" disabled required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="for">ใช้สำหรับ</label>
                            <select style='width:100%' type="text" class="form-control form-control-sm" name='for'
                                id='for' placeholder="ใช้สำหรับ" name="for" required></select>
                        </div>
                        <div class="mb-3">
                            <label for="for">เบอร์ติดต่อ</label>
                            <input type="text" class="form-control form-control-sm" name='mobile' id='mobile'
                                placeholder="ใช้สำหรับ" name="for" required />
                        </div>

                        <!-- this is future :) -->
                        <div class="mb-3" hidden>
                            <label for="acs">อุปกรณ์ที่ต้องการ</label>
                            <div class="checkbox_result form-row"></div>
                        </div>
                        <!-- this is future :) -->

                        <div class="mb-3">
                            <label for="details_booking">รายละเอียดเพิ่มเติม</label>
                            <textarea class="form-control form-control-sm" id="details_booking" rows='4'
                                cols='50'></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="col-6 pull-right btn btn-sm btn-success btn-block btn_submit"
                                disabled>บันทึก</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>