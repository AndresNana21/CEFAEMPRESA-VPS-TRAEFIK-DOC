# Migrations

Documento en el cual se listan las migraciones que tienen este proyecto.

Las migraciones son un archivo que pueden contener multiples tablas y configuraciones especificas para manipular la base de datos mediante el ORM.


--- 

migracion : modules_apps  
    table : modules
        columns:
            name
            description
            icon
            slug
            
    table : apps
        columns:
            name
            description
            icon
            url 
            slug
--- 
    table: people
        model:Person
        columns:
            first_name
            second_name      
            firm_last_name
            second_last_name
            document_number
            type_document ["CC","TI"]
            document_img
            phone_number
            second_phone_number
            user_id
            
            





            



