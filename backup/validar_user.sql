PGDMP  ,            
        |            validar_user    16.2    16.2     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    17536    validar_user    DATABASE        CREATE DATABASE validar_user WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_Spain.1252';
    DROP DATABASE validar_user;
                postgres    false            �            1259    17537    usuarios    TABLE     �   CREATE TABLE public.usuarios (
    usuario character varying(25) NOT NULL,
    nombre character varying(50),
    apellidos character varying(50),
    contrasena text,
    rol character(20)
);
    DROP TABLE public.usuarios;
       public         heap    postgres    false            �          0    17537    usuarios 
   TABLE DATA           O   COPY public.usuarios (usuario, nombre, apellidos, contrasena, rol) FROM stdin;
    public          postgres    false    215   �                  2606    17563    usuarios usuarios_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (usuario);
 @   ALTER TABLE ONLY public.usuarios DROP CONSTRAINT usuarios_pkey;
       public            postgres    false    215            �   t   x�u�A
1 �s�
_�4Mڤ?��xI�)��J/�^�yq0��3��v���o�$���njK�NlX��Pvi0_ӎ���+�)�p�}�ΐ�.�)Q�L�ydT�J�-�ynK�0D$5     