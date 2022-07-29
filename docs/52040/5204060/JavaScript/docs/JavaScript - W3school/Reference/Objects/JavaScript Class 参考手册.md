- # JavaScript Class 参考手册

  - [JS Boolean](https://www.w3school.com.cn/jsref/jsref_obj_boolean.asp)
  - [JS Date](https://www.w3school.com.cn/jsref/jsref_obj_date.asp)

  ## JavaScript 类

  类是函数的一种，但我们不使用关键字 function 来对其初始化，而是使用关键字 class，并在 constructor() 方法中分配属性：

  ### 实例

  创建一个 Car 类，然后基于这个 Car 类创建名为 "mycar" 的对象：

  ```
  class Car {  // 创建类
    constructor(brand) {  // 类构造方法
      this.carname = brand;  // 类主体、属性
    }
  }
  mycar = new Car("Ford");  // 创建 Car 类的对象
  ```

  [亲自试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_class)

  有关类的知识，请阅读我们的 [JavaScript 类教程](https://www.w3school.com.cn/js/js_classes.asp)。

  ## Class 方法

  | 方法                                                         | 描述                                         |
  | ------------------------------------------------------------ | -------------------------------------------- |
  | [constructor()](https://www.w3school.com.cn/jsref/jsref_constructor_class.asp) | 用于创建和初始化在类中创建的对象的特殊方法。 |

  ## Class 关键字

  | 关键字                                                       | 描述               |
  | ------------------------------------------------------------ | ------------------ |
  | [extends](https://www.w3school.com.cn/jsref/jsref_class_extends.asp) | 扩展类（继承）。   |
  | [static](https://www.w3school.com.cn/jsref/jsref_class_static.asp) | 为类定义静态方法。 |
  | [super](https://www.w3school.com.cn/jsref/jsref_class_super.asp) | 引用父类。         |
