<? php

regreso [
    / *
    | ------------------------------------------------- -------------------------
    | Líneas de idioma de validación
    | ------------------------------------------------- -------------------------
    |
    | Las siguientes líneas de idioma contienen los mensajes de error predeterminados utilizados por
    | la clase de validador Algunas de estas reglas tienen múltiples versiones tales
    | como el tamaño gobierna Siéntase libre de modificar cada uno de estos mensajes.
    |
    * /

    'aceptado' => ': atributo debe ser aceptado.',
    'active_url' => ': atributo no es una URL válida.',
    'after' => ': atributo debe ser una fecha posterior a: fecha.',
    'after_or_equal' => ': atributo debe ser una fecha posterior o igual a: date.',
    'alpha' => ': attribute solo debe contener letras.',
    'alpha_dash' => ': atributo sólo debe contener letras, números y guiones.',
    'alpha_num' => ': atributo sólo debe contener letras y números.',
    'array' => ': atributo debe ser un conjunto.',
    'antes' => ': atributo debe ser una fecha anterior a: fecha.',
    'before_or_equal' => ': atributo debe ser una fecha anterior o igual a: date.',
    'entre' => [
        'numeric' => ': atributo tiene que estar entre: min -: max.',
        'file' => ': atributo debe pesar entre: min -: max kilobytes.',
        'string' => ': atributo tiene que tener entre: min -: max caracteres.',
        'array' => ': atributo tiene que tener entre: min -: max ítems.',
    ],
    'boolean' => 'El campo: atributo debe tener un valor verdadero o falso.',
    'confirmado' => 'La confirmación de: atributo no coincide.',
    'fecha' => ': atributo no es una fecha válida.',
    'date_format' => ': atributo no corresponde al formato: formato.',
    'diferente' => ': atributo y: otro debe ser diferentes.',
    'digits' => ': atributo debe tener: dígitos dígitos.',
    'digits_between' => ': atributo debe tener entre: min y: max dígito.',
    'dimensiones' => 'Las dimensiones de la imagen: atributo no hijo válidas.',
    'distinct' => 'El campo: atributo contiene un valor duplicado.',
    'email' => ': atributo no es un correo válido',
    'exists' => ': atributo es inválido.',
    'file' => 'El campo: atributo debe ser un archivo.',
    'filled' => 'El campo: attribute es obligatorio.',
    'gt' => [
        'numeric' => 'El campo: atributo debe ser mayor que: valor.',
        'file' => 'El campo: atributo debe tener más de: valor kilobytes.',
        'string' => 'El campo: atributo debe tener más de: valor caracteres.',
        'array' => 'El campo: atributo debe tener más de: valor elementos.',
    ],
    'gte' => [
        'numeric' => 'El campo: atributo debe ser como mínimo: valor.',
        'file' => 'El campo: atributo debe tener como mínimo: valor kilobytes.',
        'string' => 'El campo: atributo debe tener como mínimo: valor caracteres.',
        'array' => 'El campo: atributo debe tener como mínimo: valor elementos.',
    ],
    'imagen' => ': atributo debe ser una imagen.',
    'in' => ': atributo es inválido.',
    'in_array' => 'El campo: atributo no existe en: otro.',
    'integer' => ': atributo debe ser un número entero.',
    'ip' => ': atributo debe ser una dirección IP válida.',
    'ipv4' => ': atributo debe ser un dirección IPv4 válida',
    'ipv6' => ': atributo debe ser un dirección IPv6 válida.',
    'json' => 'El campo: atributo debe tener una cadena JSON válida.',
    'lt' => [
        'numeric' => 'El campo: atributo debe ser menor que: valor.',
        'file' => 'El campo: atributo debe tener menos de: valor kilobytes.',
        'string' => 'El campo: atributo debe tener menos de: valor caracteres.',
        'array' => 'El campo: atributo debe tener menos de: valor elementos.',
    ],
    'lte' => [
        'numeric' => 'El campo: atributo debe ser como máximo: valor.',
        'file' => 'El campo: atributo debe tener como máximo: valor kilobytes.',
        'string' => 'El campo: atributo debe tener como máximo: valor caracteres.',
        'array' => 'El campo: atributo debe tener como máximo: valor elementos.',
    ],
    'max' => [
        'numeric' => ': atributo no debe ser mayor a: max.',
        'file' => ': atributo no debe ser mayor que: max kilobytes.',
        'string' => ': atributo no debe ser mayor que: max caracteres.',
        'array' => ': atributo no debe tener más de: max elementos.',
    ],
    'mimes' => ': atributo debe ser un archivo con formato:: valores.',
    'mimetypes' => ': atributo debe ser un archivo con formato:: valores.',
    'min' => [
        'numeric' => 'El tamaño de: atributo debe ser de al menos: min.',
        'file' => 'El tamaño de: atributo debe ser de al menos: min kilobytes.',
        'string' => ': atributo debe contener al menos: min caracteres.',
        'array' => ': atributo debe tener al menos: min elementos.',
    ],
    'not_in' => ': atributo es inválido.',
    'not_regex' => 'El formato del campo: atributo no es válido.',
    'numeric' => ': atributo debe ser numérico.',
    'presente' => 'El campo: atributo debe estar presente.',
    'regex' => 'El formato de: atributo es inválido.',
    'required' => 'El campo: attribute es obligatorio.',
    'required_if' => 'El campo: attribute es obligatorio cuando: other es: value.',
    'required_unless' => 'El campo: atributo es obligatorio a menos que: otro esté en: valores.',
    'required_with' => 'El campo: attribute es obligatorio cuando: values ​​está presente.',
    'required_with_all' => 'El campo: attribute es obligatorio cuando: values ​​está presente.',
    'required_without' => 'El campo: attribute es obligatorio cuando: values ​​no está presente.',
    'required_without_all' => 'El campo: atributo es obligatorio cuando ninguno de: valores presentes presentes.',
    'mismo' => ': atributo y: otro debería coincidir.',
    'tamaño' => [
        'numeric' => 'El tamaño de: atributo debe ser: tamaño.',
        'file' => 'El tamaño de: atributo debe ser: tamaño kilobytes.',
        'string' => ': attribute debe contener: tamaño caracteres.',
        'array' => ': attribute debe contener: tamaño elementos.',
    ],
    'string' => 'El campo: atributo debe ser una cadena de caracteres.',
    'timezone' => 'El: attribute debe ser una zona válida.',
    'único' => ': atributo ya ha sido registrado.',
    'cargado' => 'Subir: atributo ha fallado.',
    'url' => 'El formato: attribute es inválido.',

    / *
    | ------------------------------------------------- -------------------------
    | Líneas de lenguaje de validación personalizadas
    | ------------------------------------------------- -------------------------
    |
    | Aquí puede especificar mensajes de validación personalizados para atributos usando el
    | convención "attribute.rule" para nombrar las líneas. Esto hace que sea rápido
    | especifique una línea de idioma personalizada específica para una regla de atributo determinada.
    |
    * /

    'personalizado' => [
        'contraseña' => [
            'min' => 'La: atributo debe contener más de: min caracteres',
        ],
        'email' => [
            'único' => 'El: atributo ya ha sido registrado.',
        ],
    ],

    / *
    | ------------------------------------------------- -------------------------
    | Atributos de validación personalizados
    | ------------------------------------------------- -------------------------
    |
    | Las siguientes líneas de idioma se usan para intercambiar marcadores de posición de atributos
    | con algo más amigable para el lector, como la dirección de correo electrónico
    | de "correo electrónico". Esto simplemente nos ayuda a hacer que los mensajes sean un poco más limpios.
    |
    * /

    'atributos' => [
        'nombre' => 'nombre',
        'username' => 'usuario',
        'email' => 'correo electrónico',
        'first_name' => 'nombre',
        'last_name' => 'apellido',
        'contraseña' => 'contraseña',
        'password_confirmation' => 'confirmación de la contraseña',
        'ciudad' => 'ciudad',
        'país' => 'país',
        'dirección' => 'dirección',
        'teléfono' => 'teléfono',
        'mobile' => 'móvil',
        'edad' => 'edad',
        'sexo' => 'sexo',
        'gender' => 'género',
        'año' => 'año',
        'mes' => 'mes',
        'día' => 'día',
        'hora' => 'hora',
        'minuto' => 'minuto',
        'segundo' => 'segundo',
        'title' => 'título',
        'contenido' => 'contenido',
        'cuerpo' => 'contenido',
        'description' => 'descripción',
        'extracto' => 'extracto',
        'fecha' => 'fecha',
        'tiempo' => 'hora',
        'subject' => 'asunto',
        'mensaje' => 'mensaje',
    ],
];