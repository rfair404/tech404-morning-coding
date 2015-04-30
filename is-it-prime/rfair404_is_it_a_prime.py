print("Starting Prime Number Determining Program")


def advanced_check_number(n):
    import math
    n_sqrt = math.sqrt(n)
    i = 3
    while i < n_sqrt+1:
        if n % i == 0:
            return False
        i = i + 2
    return True


def check_number(n):
    # quickly discard numbers divisible by 2
    if n % 2 == 0:
        return False
    else:
        return advanced_check_number(n)

number = int(input("Enter a number: "))
is_prime = check_number(number)


if is_prime is True:
    print (str(number) + " is a prime number")
else:
    print (str(number) + " is not a prime number")
