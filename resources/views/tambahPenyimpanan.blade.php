<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <section>
        <h2>Form Input</h2>
        <form method="POST" action="">
            @csrf
            <label for="">Isian</label>
            <input type="text" name="isian">
            <br>
            <label for="">Nama</label>
            <input type="text" name="nama">
            <br>
            <label for="">no_hp</label>
            <input type="text" name="no_hp">
            <br>
            <label for="">alamat</label>
            <input type="text" name="alamat">
            <br>
            <label for="">moto_kerja</label>
            <input type="text" name="moto_kerja">
            <br>
            <button type="submit" value="submit">Submit!</button>
        </form>
        <button><a href="{{ '/' }}">back</a></button>
    </section>
</body>

</html>
