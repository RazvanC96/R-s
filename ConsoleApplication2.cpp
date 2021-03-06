#include "stdafx.h"
#include <iostream>
#include <Windows.h>
//#include <Psapi.h>
using namespace std;


int _tmain(int argc, _TCHAR* argv[])
{
	SYSTEM_INFO systemInfo;
	GetSystemInfo(&systemInfo);
	printf("Dimensiunea paginilor de memorie este %d\n", systemInfo.dwPageSize);
	printf("Adresa minima de memorie alocata unui proces este %xH\n", systemInfo.lpMinimumApplicationAddress);
	printf("Adresa maxima de memorie alocata unui proces este %xH\n", systemInfo.lpMaximumApplicationAddress);

	PERFORMANCE_INFORMATION performanceInfo;
	GetPerformanceInfo(&performanceInfo, sizeof(performanceInfo));
	printf("Spatiul total de memorie fizica: %u\n", performanceInfo.PhysicalTotal);
	printf("Spatiul disponibil de memorie fizica: %u\n", performanceInfo.PhysicalAvailable);
	printf("Spatiul total de memorie fizica alocat nucleului SO: %u\n", performanceInfo.KernelTotal);
	
	MEMORYSTATUSEX memoryStatus;
	memoryStatus.dwLength = sizeof(memoryStatus);
	GlobalMemoryStatusEx(&memoryStatus);
	printf("Spatiul total de memorie virtuala alocat procesului: %ld\n", memoryStatus.ullTotalVirtual);
	printf("Spatiul disponibil de memorie virtuala alocat procesului: %ld\n", memoryStatus.ullAvailVirtual);
	printf("Gradul de incarcare: %d % \n", memoryStatus.dwMemoryLoad);

	//VirtualAlloc((LPVOID)0x00830000, 0x4000, MEM_RESERVE | MEM_COMMIT, PAGE_READWRITE);
	getc(stdin);
	return 0;
}

