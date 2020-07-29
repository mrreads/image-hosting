let uploadForm = new FormData(document.querySelector("#upload"));
let addedFile = 0;
let sucessFile = 0;

Dropzone.options.upload = {
    url: document.querySelector('#upload').action, 
    autoDiscover: true,
    autoProcessQueue: true,
    uploadMultiple: true,
    parallelUploads: 100,
    maxFiles: 20,
    acceptedFiles: "image/*",
    paramName: 'upload[]',
    clickable: true,

    dictDefaultMessage: "Перетащите изображения для загрузки.",
    dictFallbackMessage: "Ваш браузер не поддерживает данный тип загрузки изображений.",
    dictFileTooBig: "Файл слишком большой: ({{filesize}}MiB). <br> Максимальный размер файла: {{maxFilesize}}MiB.",
    dictInvalidFileType: "Неподерживаемый формат файла.",
    dictResponseError: "Сервер ответил: {{statusCode}}.",

    init: function ()
    {
        upload = this;
        document.querySelector('.upload__button').addEventListener('click', (e) => 
        {
            e.preventDefault();
            e.stopPropagation();

            fetch('/application/controller/imageLoad.php', 
            {
                //headers: { 'Content-Type': 'multipart/form-data' },
                method: 'POST',
                body: uploadForm
            })
            .then((result) =>
            {
                result.json().then(result => 
                {
                    if (result === 'sucess')
                    {
                        
                    }
                });
            });

        });

        this.on("addedfile", function(file) 
        { 
            addedFile++;
            uploadForm.append("upload[]", file);          
        });

        this.on("success", function(file) 
        {
            sucessFile++;

            if (sucessFile === addedFile)
            {
                
            }
        });

    }
};