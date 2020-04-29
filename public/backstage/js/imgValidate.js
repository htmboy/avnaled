function validate()
{
    var config = {
        // 产品缩率图验证设置
        'product': {

            // 图片大小不超过
            'size': 1024 * 100,

            // 宽高比
            'radio': 1,
            // 图片类型
            'type': ['image/jpeg', 'image/png', 'image/gif']
        },
        // 产品缩率图验证设置
        'article': {

            // 图片大小不超过
            'size': 1024 * 100,

            // 宽高比
            'radio': 0.75,

            // 图片类型
            'type': ['image/jpeg', 'image/png', 'image/gif']
        },
    };
    var thumbnail = document.getElementsByName('thumbnail')[0];
    var conf = config[thumbnail.getAttribute('of')];
    var photo = document.getElementsByName('photo')[0];
    thumbnail.addEventListener("change", function () {
        // photo.src = "";
        // 验证图片类型
        if(conf.type.indexOf(this.files[0].type) == -1){
            alert("上传的格式错误, 请上传格式为" + conf.type.toString() + "的图片");
            this.value = "";
            return false;
        }
        // 验证图片大小
        if(this.files[0].size > conf.size){
            alert("上传的图片必须小于" + (conf.size/1024) + "k");
            this.value = "";
            return false;
        }
        var image = new Image();
        image.src = window.URL.createObjectURL(this.files[0]);
        image.onload = () => {
            var radio =  image.width / image.height;
            var alt;
            // 验证图片比例
            if(radio.toFixed(1) != conf.radio.toFixed(1)){
                this.value = "";
                if(conf.radio == 1){
                    alt = conf.radio + "\r\n当前图片宽度为"+parseInt(image.width) + "\r\n当前图片高度为"+parseInt(image.height)
                } else {
                    alt = conf.radio + ":1\r\n当前图片宽度为"+parseInt(image.width) + "\r\n当前图片高度为"+parseInt(image.height)
                }

                alert("上传的图片比例不对：宽高比必须为" + alt);
                console.log(this.value);

                return false;
            }
            photo.src = image.src;
        }

    });
}
validate();