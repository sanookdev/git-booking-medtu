function deleted(id) {
    Swal.fire({
        title: 'ลบข้อมูล ?',
        text: "ท่านแน่ใจว่าต้องการลบข้อมูล !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: 'red',
        cancelButtonColor: 'grey',
        confirmButtonText: 'ลบข้อมูล !'
    }).then((result) => {
        if (result.value) {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'ลบข้อมูลเรียบร้อยแล้ว',
                showConfirmButton: false,
                timer: 1500
            })
        }
    })
}