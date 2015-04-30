object Fibonacci {
  val fib: Stream[Long] = {
    def fibs(h: Long, n: Long): Stream[Long] = h #:: fibs(n, h+n)
    fibs(0, 1)
  }
  def main(args: Array[String]) = {
    val takeTo = args(0).toInt
    fib.take(takeTo).toList.foreach(println)
  }
}
