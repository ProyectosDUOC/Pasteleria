CREATE TABLE boleta (
    id_boleta     INTEGER NOT NULL,
    total         INTEGER,
    id_empleado   INTEGER NOT NULL
);

ALTER TABLE boleta ADD CONSTRAINT boleta_pk PRIMARY KEY ( id_boleta );

CREATE TABLE categoria (
    id_cate       INTEGER NOT NULL,
    nombre_cate   NVARCHAR(40),
    activo        INTEGER
);

ALTER TABLE categoria ADD CONSTRAINT categoria_pk PRIMARY KEY ( id_cate );

CREATE TABLE cliente (
    id_cliente         INTEGER NOT NULL,
    rut_cliente        VARCHAR(30) NOT NULL,
    nombres            VARCHAR(60) NOT NULL,
    apellidos          NVARCHAR(30) NOT NULL,
    fecha_nacimiento   DATETIME,
    id_comuna          INTEGER NOT NULL,
    telefono_cliente   INTEGER,
    correo_cliente     NVARCHAR(50) NOT NULL,
    activo             INTEGER NOT NULL
);

ALTER TABLE cliente ADD CONSTRAINT cliente_pk PRIMARY KEY ( id_cliente );

CREATE TABLE comuna (
    id_comuna       INTEGER NOT NULL,
    nombre_comuna   NVARCHAR(30)
);

ALTER TABLE comuna ADD CONSTRAINT comuna_pk PRIMARY KEY ( id_comuna );

CREATE TABLE detalle_boleta (
    id_detalle      INTEGER NOT NULL,
    id_producto_p   INTEGER NOT NULL,
    id_boleta       INTEGER NOT NULL,
    cant            INTEGER,
    total           INTEGER
);

ALTER TABLE detalle_boleta ADD CONSTRAINT detalle_boleta_pk PRIMARY KEY ( id_detalle );

CREATE TABLE detalle_pedido_local (
    id_detalle_local   INTEGER NOT NULL,
    id_pedido_local    INTEGER NOT NULL,
    cant               INTEGER,
    total              INTEGER,
    id_producto_p      INTEGER NOT NULL
);

ALTER TABLE detalle_pedido_local ADD CONSTRAINT detalle_pedido_local_pk PRIMARY KEY ( id_detalle_local );

CREATE TABLE detalle_pedido_online (
    id_detalle_online   INTEGER NOT NULL,
    id_pedido_online    INTEGER NOT NULL,
    id_producto_p       INTEGER NOT NULL,
    cant                INTEGER,
    total               INTEGER
);

ALTER TABLE detalle_pedido_online ADD CONSTRAINT detalle_reservav1_pk PRIMARY KEY ( id_detalle_online );

CREATE TABLE direccion_cliente (
    id_direccion   INTEGER NOT NULL,
    id_cliente     INTEGER NOT NULL,
    nombres        NVARCHAR(30),
    apellidos      NVARCHAR(30),
    informacion    NVARCHAR(100),
    zip            NVARCHAR(30),
    id_comuna      INTEGER NOT NULL,
    direccion      NVARCHAR(100),
    telefono       NVARCHAR(10),
    celular        NVARCHAR(10)
);

ALTER TABLE direccion_cliente ADD CONSTRAINT direccion_cliente_pk PRIMARY KEY ( id_direccion );

CREATE TABLE empledo (
    id_empleado         INTEGER NOT NULL,
    rut_empleado        VARCHAR(30) NOT NULL,
    nombres             VARCHAR(60) NOT NULL,
    apellidos           NVARCHAR(30) NOT NULL,
    fecha_nacimiento    DATETIME,
    telefono_empleado   INTEGER,
    id_comuna           INTEGER NOT NULL,
    correo_empleado     NVARCHAR(50) NOT NULL,
    activo              INTEGER NOT NULL
);

ALTER TABLE empledo ADD CONSTRAINT empledo_pk PRIMARY KEY ( id_empleado );

CREATE TABLE forma_envio (
    id_forma_envio   INTEGER NOT NULL,
    nombre_envio     NVARCHAR(30)
);

ALTER TABLE forma_envio ADD CONSTRAINT forma_envio_pk PRIMARY KEY ( id_forma_envio );

CREATE TABLE forma_pago (
    id_forma_pago   INTEGER NOT NULL,
    nombre_pago     NVARCHAR(30)
);

ALTER TABLE forma_pago ADD CONSTRAINT forma_pago_pk PRIMARY KEY ( id_forma_pago );

CREATE TABLE pedido_local (
    id_pedido_local   INTEGER NOT NULL,
    id_cliente        INTEGER NOT NULL,
    glosa             NVARCHAR(300),
    descuento         INTEGER,
    total             INTEGER,
    fecha_termino     DATETIME,
    fecha_inscrita    DATETIME
);

ALTER TABLE pedido_local ADD CONSTRAINT pedido_local_pk PRIMARY KEY ( id_pedido_local );

CREATE TABLE pedido_online (
    id_pedido_online   INTEGER NOT NULL,
    glosa              NVARCHAR(300),
    id_cliente         INTEGER NOT NULL,
    id_forma_envio     INTEGER NOT NULL,
    id_forma_pago      INTEGER NOT NULL
);

ALTER TABLE pedido_online ADD CONSTRAINT pedido_online_pk PRIMARY KEY ( id_pedido_online );

CREATE TABLE producto (
    id_producto       INTEGER NOT NULL,
    cod_producto      NVARCHAR(30),
    nombre_producto   NVARCHAR(1),
    activo            INTEGER,
    id_cate           INTEGER NOT NULL
);

ALTER TABLE producto ADD CONSTRAINT producto_pk PRIMARY KEY ( id_producto );

CREATE TABLE producto_precio (
    id_producto_p   INTEGER NOT NULL,
    id_producto     INTEGER NOT NULL,
    descripcion     NVARCHAR(40),
    precio          INTEGER
);

ALTER TABLE producto_precio ADD CONSTRAINT producto_precio_pk PRIMARY KEY ( id_producto_p );

CREATE TABLE sucursal (
    id_sucursal       INTEGER NOT NULL,
    nombre_sucursal   NVARCHAR(30)
);

ALTER TABLE boleta
    ADD CONSTRAINT bole_emple_fk FOREIGN KEY ( id_empleado )
        REFERENCES empledo ( id_empleado );

ALTER TABLE cliente
    ADD CONSTRAINT cliente_comuna_fk FOREIGN KEY ( id_comuna )
        REFERENCES comuna ( id_comuna );

ALTER TABLE detalle_boleta
    ADD CONSTRAINT debo_bole_fk FOREIGN KEY ( id_boleta )
        REFERENCES boleta ( id_boleta );

ALTER TABLE detalle_boleta
    ADD CONSTRAINT debo_producto_precio_fk FOREIGN KEY ( id_producto_p )
        REFERENCES producto_precio ( id_producto_p );

ALTER TABLE detalle_pedido_online
    ADD CONSTRAINT depe_producto_precio_fk FOREIGN KEY ( id_producto_p )
        REFERENCES producto_precio ( id_producto_p );

ALTER TABLE detalle_pedido_local
    ADD CONSTRAINT deta_local_pedi_local_fk FOREIGN KEY ( id_pedido_local )
        REFERENCES pedido_local ( id_pedido_local );

ALTER TABLE detalle_pedido_local
    ADD CONSTRAINT deta_prpr_fk FOREIGN KEY ( id_producto_p )
        REFERENCES producto_precio ( id_producto_p );

ALTER TABLE detalle_pedido_online
    ADD CONSTRAINT detalle_online_pedi_fk FOREIGN KEY ( id_pedido_online )
        REFERENCES pedido_online ( id_pedido_online );

ALTER TABLE direccion_cliente
    ADD CONSTRAINT dire_clie_fk FOREIGN KEY ( id_cliente )
        REFERENCES cliente ( id_cliente );

ALTER TABLE direccion_cliente
    ADD CONSTRAINT direccion_cliente_comuna_fk FOREIGN KEY ( id_comuna )
        REFERENCES comuna ( id_comuna );

ALTER TABLE empledo
    ADD CONSTRAINT empl_comu_fk FOREIGN KEY ( id_comuna )
        REFERENCES comuna ( id_comuna );

ALTER TABLE pedido_online
    ADD CONSTRAINT pedido_forma_fk FOREIGN KEY ( id_forma_envio )
        REFERENCES forma_envio ( id_forma_envio );

ALTER TABLE pedido_local
    ADD CONSTRAINT pelo_cliente_fk FOREIGN KEY ( id_cliente )
        REFERENCES cliente ( id_cliente );

ALTER TABLE pedido_online
    ADD CONSTRAINT pelo_cliente_fkv2 FOREIGN KEY ( id_cliente )
        REFERENCES cliente ( id_cliente );

ALTER TABLE pedido_online
    ADD CONSTRAINT peon_forma_fk FOREIGN KEY ( id_forma_pago )
        REFERENCES forma_pago ( id_forma_pago );

ALTER TABLE producto_precio
    ADD CONSTRAINT prod_prec_prod_fk FOREIGN KEY ( id_producto )
        REFERENCES producto ( id_producto );

ALTER TABLE producto
    ADD CONSTRAINT producto_categoria_fk FOREIGN KEY ( id_cate )
        REFERENCES categoria ( id_cate );