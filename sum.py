import sys

if len(sys.argv) != 3:
    print("Error: Two numbers required")
    sys.exit(1)

try:
    a = float(sys.argv[1])
    b = float(sys.argv[2])
    print(a + b)
except ValueError:
    print("Error: Invalid input")
