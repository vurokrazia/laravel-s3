<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@0.7.4/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
  <div class="mxa-w-md mx-auto py-8">
    <form action="/" method="POST" class="_flex" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{csrf_token() }}" >
      <input type="file" name="image" id="image">
      <button type="submit">send</button>
    </form>
  </div>
</body>

</html>