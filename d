[31m  > [0m[34m 7| [0m[32mclass [0m[39mCategory [0m[32mextends [0m[39mModel[0m
    [34m 8| [0m[32m{[0m
    [34m 9| [0m
    [34m10| [0m
    [34m11| [0m[32m	protected [0m[39m$fillable [0m[32m= [[0m
    [34m12| [0m[32m	   [0m[33m//Claves foraneaas agregadas - > miercoles 08/03 - 12:08 am[0m
    [34m13| [0m[33m		[0m[31m'name'[0m
    [34m14| [0m[31m	[0m[32m];[0m
    [34m15| [0m
    [34m16| [0m
    [34m17| [0m
    [34m18| [0m[32m	[0m[33m//Una categoria tiene uno o muchos autores[0m
    [34m19| [0m[33m	[0m[32mpublic function [0m[39mauthors[0m[32m(){[0m
    [34m20| [0m[32m		return [0m[39m$this[0m[32m->[0m[39mbelogsToMany[0m[32m([0m[31m'App\Author'[0m[32m,[0m[31m'author_category'[0m[32m);[0m[33m//(,tableName)[0m
    [34m21| [0m[33m	[0m[32m}[0m
    [34m22| [0m[32m	[0m[33m//Una categoria tiene una o muchas editoriales[0m
    [34m23| [0m[33m	[0m[32mpublic function [0m[39meditorials[0m[32m(){[0m
    [34m24| [0m[32m		return [0m[39m$this[0m[32m->[0m[39mbelogsToMany[0m[32m([0m[31m'App\Editorial'[0m[32m,[0m[31m'category_editorial'[0m[32m);[0m
    [34m25| [0m[32m	}[0m
    [34m26| [0m
    [34m27| [0m
    [34m28| [0m[32m}[0m

[31m  > [0m[34m 7| [0m[32mclass [0m[39mCategory [0m[32mextends [0m[39mModel[0m
    [34m 8| [0m[32m{[0m
    [34m 9| [0m
    [34m10| [0m
    [34m11| [0m[32m	protected [0m[39m$fillable [0m[32m= [[0m
    [34m12| [0m[32m	   [0m[33m//Claves foraneaas agregadas - > miercoles 08/03 - 12:08 am[0m
    [34m13| [0m[33m		[0m[31m'name'[0m
    [34m14| [0m[31m	[0m[32m];[0m
    [34m15| [0m
    [34m16| [0m
    [34m17| [0m
    [34m18| [0m[32m	[0m[33m//Una categoria tiene uno o muchos autores[0m
    [34m19| [0m[33m	[0m[32mpublic function [0m[39mauthors[0m[32m(){[0m
    [34m20| [0m[32m		return [0m[39m$this[0m[32m->[0m[39mbelogsToMany[0m[32m([0m[31m'App\Author'[0m[32m,[0m[31m'author_category'[0m[32m);[0m[33m//(,tableName)[0m
    [34m21| [0m[33m	[0m[32m}[0m
    [34m22| [0m[32m	[0m[33m//Una categoria tiene una o muchas editoriales[0m
    [34m23| [0m[33m	[0m[32mpublic function [0m[39meditorials[0m[32m(){[0m
    [34m24| [0m[32m		return [0m[39m$this[0m[32m->[0m[39mbelogsToMany[0m[32m([0m[31m'App\Editorial'[0m[32m,[0m[31m'category_editorial'[0m[32m);[0m
    [34m25| [0m[32m	}[0m
    [34m26| [0m
    [34m27| [0m
    [34m28| [0m[32m}[0m

