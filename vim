//调整窗口高度
:resize+3
:resize-8

//关闭所有其它窗口
:only

//缓冲区跳转 一般通过[vim file1 file2 ……] 打开多个文件 但是展示的只有一个 因此用以下命令可以在不同的缓冲区间进行跳转
//下一个缓冲区
:bnext
//上一个缓冲区
:blast

//下一个单词头
w
//前一个单词头
b

//增加多行注释
//法一
Ctrl+v定位到开始行；然后执行I命令；输入#或//；按Esc键两次。(将#或者//替换成其他想要的字符也可以批量生成)
//法二
//原理就是在行开头插入注释符
:1,$s/^/\/\//gc

