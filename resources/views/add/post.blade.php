<form method="post" >
    {{csrf_field()}}
    <p>名前を入れてね</p>
    <input type="text" name="name">
    <input type="submit">
</form>


@if(!empty($name))
    {{$name}}
@endif
