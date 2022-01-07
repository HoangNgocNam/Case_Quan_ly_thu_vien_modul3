<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nhập tên">
    <input type="email" name="email" placeholder="Nhập Email">
    <input type="password" name="currenPassword" placeholder="Nhập mật khẩu hiện tại">
    <input type="password" name="newPassword" placeholder="Nhập mật khẩu mới">
    <button type="submit">Reset</button>
</form>
