# SlideCapcha
slide capcha,it is free, as original author (weiyingbin) said that many verification code need charged. So, try this.
This library is [tncode](https://github.com/binwind8/tncode)'s upgrade, thinks for weiyingbin, hope no infringement.

# for install
composer require first236108/slide-capcha

# document
for detail, please reference the example. Just need to pay attention, first, the API return data must include status field; and second, the format of picture is png; finally,the form handle is id, like this:
```html
<form id="form1">
    <input type="text" name="">
    <!--……-->
    <button type="button" class="tncode"></button>
</form>

<script >
tncode.init({
        imageUrl: '/make.php',
        submit: '/login.php',
        form: 'form1',              //form handle
        method: 'post',
        success: 'ok',              //status
        onsuccess: function (res) {
            console.log(res);
            debugger;
            location.href = res.url;
        }
    });
</script>
```