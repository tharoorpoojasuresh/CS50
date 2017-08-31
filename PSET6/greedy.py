import cs50
def cal(n):
  c=0
  if n <= 0.009:
    print(" How much change is owed?")
    m=cs50.get_float()
    cal(m)
  else:
      while n > 0.009:
          if n >= 0.25:
              n=n-0.25
              c=c+1
          elif n >= 0.10:
              n=n-0.10
              c=c+1
          elif n >= 0.05:
              n=n-0.05
              c=c+1
          else:
              n=n-0.01
              c=c+1
      print("{}".format(c))
def main():
    print("O hai!")
    print(" How much change is owed?")
    n=cs50.get_float()
    cal(n)

if __name__=="__main__":
    main()