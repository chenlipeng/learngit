#SED

#FORMAT
sed [-nefri] 'command' 输入文本

常用选项:
-n
是用安静模式。一般情况下，所有来自STDIN的资料一般都会被列出到荧幕上。若加上该参数，则只有经过sed特殊处理的那一行才会被列出来;

-e
直接在指令列模式上进行 sed 的动作编辑;默认情况下一次sed只使用一个sed动作,而如果使用-e则可以指定多个动作;

-f
直接将 sed 的动作写在一个档案内， -f filename 则可以执行 filename 内的sed 动作;

-r
sed 的动作支援的是延伸型正则表示法的语法。(预设是基础正则表示法语法);

-i
直接修改读取的档案内容，而不是由萤幕输出;


常用命令:
a
新增， a 的后面可以接字串，而这些字串会在新的一行出现(目前的下一行);

d
删除，因为是删除，所以 d 后面通常不接任何咚咚;

c
取代， c 的后面可以接字串，这些字串可以取代 n1,n2 之间的行;

i
插入， i 的后面可以接字串，而这些字串会在新的一行出现(目前的上一行);

p
列印，亦即将某个选择的资料印出。通常 p 会与参数 sed -n 一起运作; 可用于打印指定文件的特定行

s
取代，可以直接进行取代的工作哩！通常这个 s 的动作可以搭配正则表达式！例如 1,20s/old/new/g 就是啦！


例如:
	sed '1a xxxxxxxx' filename
	#在文件filename的第一行的下一行增加一行内容xxxxxxxx

	sed '1i xxxxxxxx' filename
	#在文件filename的第一行的上一行增加一行内容xxxxxxxx

	sed '1c xxxxxxxx' filename
	#在文件filename的第一行替换为内容xxxxxxxx

	sed -n -e '/xxx/p' -e '/yyyy/p' filename
	#打印包含xxx和yyyy的行

	sed -n '2p' filename
	#打印filename的第二行数据

	sed -f script.file filename
	#执行的动作为script.file文件中的动作

	sed -i '/^$/d' filename
	删除空行
