let uploadForm = new FormData(document.querySelector("#upload"));
let uploadButton = document.querySelector('.upload__button');
let addedFile = 0;
let sucessFile = 0;

function checkButton()
{
    
    if (sucessFile === addedFile)
    {
        uploadButton.classList.remove('disabled');
    }
    else
    {
        uploadButton.classList.add('disabled');
    }
}

Dropzone.options.upload = {
    addRemoveLinks: true,
    url: document.querySelector('#upload').action, 
    autoDiscover: true,
    autoProcessQueue: true,
    uploadMultiple: true,
    parallelUploads: 100,
    maxFiles: 20,
    acceptedFiles: "image/*",
    paramName: 'upload[]',
    
    dictDefaultMessage: "Перетащите изображения для загрузки.",
    dictFallbackMessage: "Ваш браузер не поддерживает данный тип загрузки изображений.",
    dictFileTooBig: "Файл слишком большой: ({{filesize}}MiB). <br> Максимальный размер файла: {{maxFilesize}}MiB.",
    dictInvalidFileType: "Неподерживаемый формат файла.",
    dictResponseError: "Сервер ответил: {{statusCode}}.",
    dictRemoveFile: "Удалить файл",
    dictCancelUpload: "Остановить",

    init: function ()
    {
        upload = this;
        document.querySelector('.upload__button').addEventListener('click', (e) => 
        {
            e.preventDefault();
            e.stopPropagation();

            if (!uploadButton.classList.contains('disabled'))
            {
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
                            uploadButton.classList.add('disabled');
                            document.querySelector('.uploaded').style.display = 'block';
                        }
                    });
                });
            }
        });

        this.on("addedfile", function(file) 
        { 
            addedFile++;
            uploadForm.append("upload[]", file);
            checkButton(); 
        });

        this.on("success", function(file) 
        {
            sucessFile++;
            checkButton();
        });

        this.on("removedfile", function(file) 
        {
            addedFile--;

            if (file.status == 'success')
                sucessFile--;

        });
    }
};