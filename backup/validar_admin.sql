PGDMP              
        |            validar_admin    16.2    16.2     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    17528    validar_admin    DATABASE     �   CREATE DATABASE validar_admin WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_Spain.1252';
    DROP DATABASE validar_admin;
                postgres    false            �            1259    17529    usuarios    TABLE     �   CREATE TABLE public.usuarios (
    usuario character varying(100) NOT NULL,
    nombre character varying(100),
    apellidos character varying(100),
    contrasena text,
    rol character(20)
);
    DROP TABLE public.usuarios;
       public         heap    postgres    false            �          0    17529    usuarios 
   TABLE DATA           O   COPY public.usuarios (usuario, nombre, apellidos, contrasena, rol) FROM stdin;
    public          postgres    false    215   �                  2606    17535    usuarios usuarios_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (usuario);
 @   ALTER TABLE ONLY public.usuarios DROP CONSTRAINT usuarios_pkey;
       public            postgres    false    215            �   I   x�34NǼ���bN����*N#���$���D�Ds�d�dc�DC3K�4�T�$�Ĕ��<T����� V�1     