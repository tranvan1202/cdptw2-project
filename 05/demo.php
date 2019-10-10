<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.7/dist/vue.js"></script>
    <title>Document</title>
</head>
<body>
<ul id="example-1">
  <li v-for="item in items">
    {{ item.name }}
  </li>
</ul>
</body>
</html>
<script>
    var example1 = new Vue({
    el: '#example-1',
    data: {
        items: [
        { name: 'Cà phê' },
        { name: 'Trà đặc' },
        { name: 'Bò húc' }
        ]
    }
})
</script>