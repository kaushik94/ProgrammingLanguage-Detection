import sys

input_file = sys.argv[1]
f = open(input_file, 'r')

def detect_right_left(line):
	line.strip('\t')
	line.strip('\n')
	line.strip('\r')
	line = line.split('=')
	if len(line) == 1:
		line.append('')
		return line
	if len(line) == 2:
		return line
	if len(line) >= 2:
		return [line[0:-1], line[-1]]

tokens = []
for line in f:
	left, right = detect_right_left(line)
	print 'left', left
	print 'right', right


a = b = c = 10
print a, b, c
