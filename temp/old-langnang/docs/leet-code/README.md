<h1>Code Questuin</h1>

- [Array](#Array)
  - [Leet31.下一个排列.nextPermutation](#Leet31%E4%B8%8B%E4%B8%80%E4%B8%AA%E6%8E%92%E5%88%97nextPermutation)
  - [~~Leet41.缺失的第一个正数.firstMissingPositive~~](#Leet41%E7%BC%BA%E5%A4%B1%E7%9A%84%E7%AC%AC%E4%B8%80%E4%B8%AA%E6%AD%A3%E6%95%B0firstMissingPositive)
  - [Leet48.旋转图像.rotate](#Leet48%E6%97%8B%E8%BD%AC%E5%9B%BE%E5%83%8Frotate)
  - [Leet54.螺旋矩阵.spiralOrder](#Leet54%E8%9E%BA%E6%97%8B%E7%9F%A9%E9%98%B5spiralOrder)
  - [~~Leet54.加一.plusOne~~](#Leet54%E5%8A%A0%E4%B8%80plusOne)
  - [Leet73.矩阵置零.setZeros](#Leet73%E7%9F%A9%E9%98%B5%E7%BD%AE%E9%9B%B6setZeros)
  - [Leet118.杨辉三角.generate](#Leet118%E6%9D%A8%E8%BE%89%E4%B8%89%E8%A7%92generate)
  - [Leet119.杨辉三角 II.getRow](#Leet119%E6%9D%A8%E8%BE%89%E4%B8%89%E8%A7%92-IIgetRow)
  - [~~Leet189.旋转数组.rotate~~](#Leet189%E6%97%8B%E8%BD%AC%E6%95%B0%E7%BB%84rotate)
  - [~~Leet228.汇总区间.summaryRanges~~](#Leet228%E6%B1%87%E6%80%BB%E5%8C%BA%E9%97%B4summaryRanges)
  - [~~Leet229.求众数 II.majorityElement~~](#Leet229%E6%B1%82%E4%BC%97%E6%95%B0-IImajorityElement)
  - [~~Leet238.除自身以外数组的乘积.productExceptSelf~~](#Leet238%E9%99%A4%E8%87%AA%E8%BA%AB%E4%BB%A5%E5%A4%96%E6%95%B0%E7%BB%84%E7%9A%84%E4%B9%98%E7%A7%AFproductExceptSelf)
  - [~~Leet414.第三大的数.thirdMax~~](#Leet414%E7%AC%AC%E4%B8%89%E5%A4%A7%E7%9A%84%E6%95%B0thirdMax)
  - [~~Leet442.数组中重复的数据.findDuplicates~~](#Leet442%E6%95%B0%E7%BB%84%E4%B8%AD%E9%87%8D%E5%A4%8D%E7%9A%84%E6%95%B0%E6%8D%AEfindDuplicates)
- [Math](#Math)
- [Sort](#Sort)
- [String](#String)
- [参考](#%E5%8F%82%E8%80%83)

# Array

## Leet31.下一个排列.nextPermutation

> 实现获取下一个排列的函数，算法需要将给定数字序列重新排列成字典序中下一个更大的排列。
>
> 如果不存在下一个更大的排列，则将数字重新排列成最小的排列（即升序排列）

## ~~Leet41.缺失的第一个正数.firstMissingPositive~~

> 给定一个未排序的整数数组，找出其中没有出现的最小的正整数。

从 1 开始遍历，查找是否存在于数组中?next:return;

## Leet48.旋转图像.rotate

> 给定一个 n × n 的二维矩阵表示一个图像。
>
> 将图像顺时针旋转 90 度。

## Leet54.螺旋矩阵.spiralOrder

> 给定一个包含 m x n 个元素的矩阵（m 行, n 列），请按照顺时针螺旋顺序，返回矩阵中的所有元素。

## ~~Leet54.加一.plusOne~~

> 给定一个由整数组成的非空数组所表示的非负整数，在该数的基础上加一。
>
> 最高位数字存放在数组的首位， 数组中每个元素只存储一个数字。
>
> 你可以假设除了整数 0 之外，这个整数不会以零开头。

~~数组拼接成字符串，转换成数值，数值+1，分割成数组==>JS 数值有一定限制，超出为 000，即超出一定长度，末位转换为 0~~

从数组最后一位向前遍历，若为 9 则修改为 0 继续，不为 9 则+1 并返回位置
如果返回的位置为空，则在数组前添加一个元素 1
返回新的数组

## Leet73.矩阵置零.setZeros

> 给定一个 m x n 的矩阵，如果一个元素为 0，则将其所在行和列的所有元素都设为 0。请使用原地算法。

## Leet118.杨辉三角.generate

> 给定一个非负整数 numRows，生成杨辉三角的前 numRows 行。
> 在杨辉三角中，每个数是它左上方和右上方的数的和。
> ![](https://upload.wikimedia.org/wikipedia/commons/0/0d/PascalTriangleAnimated2.gif)
>
> ```js
> [
>   [1],
>   [1, 1],
>   [1, 2, 1],
>   [1, 3, 3, 1],
>   [1, 4, 6, 4, 1],
>   [1, 5, 10, 10, 5, 1],
>   [1, 6, 15, 20, 15, 6, 1],
>   [1, 7, 21, 35, 35, 21, 7, 1],
>   [1, 8, 28, 56, 70, 56, 28, 8, 1]
> ];
> [1, rowInx, (rowInx * (rowInx . 1)) / 2];
> ```

每一行首尾为 1，数组长度为行数+1，

## Leet119.杨辉三角 II.getRow

> 给定一个非负索引 k，其中 k ≤ 33，返回杨辉三角的第 k 行。
> 在杨辉三角中，每个数是它左上方和右上方的数的和。

分为三个部分 left，center，right；
left，right 相互反转，奇数个数元素有 center
left=`[1,]`

## ~~Leet189.旋转数组.rotate~~

> 给定一个数组，将数组中的元素向右移动 k 个位置，其中 k 是非负数。

## ~~Leet228.汇总区间.summaryRanges~~

> 给定一个无重复元素的有序整数数组，返回数组区间范围的汇总。

## ~~Leet229.求众数 II.majorityElement~~

> 给定一个大小为 n 的数组，找出其中所有出现超过 ⌊ n/3 ⌋ 次的元素。

先遍历统计所有出现次数，在遍历比较

## ~~Leet238.除自身以外数组的乘积.productExceptSelf~~

> 给定长度为  n  的整数数组  nums，其中  n > 1，返回输出数组  output ，其中 output[i]  等于  nums  中除  nums[i]  之外其余各元素的乘积。

## ~~Leet414.第三大的数.thirdMax~~

> 给定一个非空数组，返回此数组中第三大的数。如果不存在，则返回数组中最大的数。要求算法时间复杂度必须是 O(n)

去重，数值排序

## ~~Leet442.数组中重复的数据.findDuplicates~~

> 给定一个整数数组 a，其中 1 ≤ a[i] ≤ n （n 为数组长度）, 其中有些元素出现两次而其他元素出现一次。找到所有出现两次的元素。

# Math

# Sort

# String

# 参考

. https://leetcode.cn.com/problemset/all/
. https://www.nowcoder.com/contestRoom
