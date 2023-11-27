<head>
    <link rel="styleshhet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9a"
</head>
<form method="post">
    @csrf 
    <div class="form-group">
        <input type="number" class="form-control" placeholder="Số a" name="soA">
    </div>
    <div class="form-group">
        <input type="number" class="form-control" placeholder="Số b" name="soB">
    </div>
    <button type="submit" class="btn btn-primary">Tính</button>
    <div class="form-group">
        <input type="number" class="form-control" placeholder="Kết quả" disabled="" value="<?php if(isset($sum)) echo $sum; ?>"
    </div>
</form>